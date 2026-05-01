<?php

namespace App\Events;

use App\Models\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    // This determines WHICH channel Pusher sends the message to
    public function broadcastOn(): array
    {
        // We use a Private channel tied to the receiver's ID for security
        return [
            new PrivateChannel('chat.' . $this->message->receiver_id),
        ];
    }
    
    // The name of the event the frontend will listen for
    public function broadcastAs(): string
    {
        return 'MessageSentEvent';
    }
}
