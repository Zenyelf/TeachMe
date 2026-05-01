<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use App\Events\MessageSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    // =========================================================================
    // 1. INDEX: Loads the chat page, sidebars, and message history
    // =========================================================================
    public function index(Request $request)
    {
        $currentUserId = Auth::id();

        // ONLY get IDs of users you have an existing chat history with
        $chattedUserIds = Message::where('sender_id', $currentUserId)->pluck('receiver_id')
            ->merge(Message::where('receiver_id', $currentUserId)->pluck('sender_id'))
            ->unique();

        $contacts = User::whereIn('id', $chattedUserIds)->get();

        // Determine active user
        $activeUserId = $request->query('user_id');
        
        // If searching a new user, force them into the contacts list so they show up
        if ($activeUserId && !$contacts->contains('id', $activeUserId)) {
            $newContact = User::find($activeUserId);
            if ($newContact) {
                $contacts->push($newContact);
            }
        }
        $activeUser = $contacts->where('id', $activeUserId)->first();

        // Fetch history
        $messages = [];
        if ($activeUserId) {
            $messages = Message::where(function ($query) use ($currentUserId, $activeUserId) {
                $query->where('sender_id', $currentUserId)->where('receiver_id', $activeUserId);
            })->orWhere(function ($query) use ($currentUserId, $activeUserId) {
                $query->where('sender_id', $activeUserId)->where('receiver_id', $currentUserId);
            })->orderBy('created_at', 'asc')->get();
        }

        return view('chat', compact('contacts', 'activeUser', 'messages'));
    }

    // =========================================================================
    // 2. SEARCH: Fetches new users from the database via the sidebar search
    // =========================================================================
    public function search(Request $request)
    {
        $query = $request->get('q');
        if (!$query) return response()->json([]);

        $currentUser = Auth::user();
        
        // Determine who this user is allowed to search for
        $allowedRole = strtolower($currentUser->role) === 'student' ? 'Mentor' : 'Student';

        // Search users by name, excluding yourself, AND filtering by allowed role
        $users = User::where('id', '!=', $currentUser->id)
                     ->where('role', $allowedRole) // <-- THE UI FILTER
                     ->where('name', 'LIKE', "%{$query}%")
                     ->take(10)
                     ->get(['id', 'name', 'role']); // Added 'role' just in case you need it in JS
                     
        return response()->json($users);
    }

    // =========================================================================
    // 3. SEND MESSAGE: Catches the AJAX request and broadcasts to Pusher
    // =========================================================================
    public function sendMessage(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'receiver_id' => 'required',
            'message' => 'required|string',
        ]);

        $sender = Auth::user();
        $receiver = User::findOrFail($request->receiver_id);

        // <-- THE SECURITY BOUNCER -->
        // If the sender and receiver have the exact same role, block the message
        if (strtolower($sender->role) === strtolower($receiver->role)) {
            return response()->json([
                'status' => 'error',
                'message' => 'You are only allowed to chat with ' . (strtolower($sender->role) === 'student' ? 'Mentors' : 'Students') . '.'
            ], 403);
        }

        // Save the message to the database
        $message = Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);

        // Broadcast the event to Pusher
        broadcast(new MessageSent($message))->toOthers();

        // Return a successful JSON response back to the JavaScript
        return response()->json([
            'status' => 'success',
            'message' => 'Message sent successfully!',
            'data' => $message
        ]);
    }
}