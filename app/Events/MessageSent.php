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
    public function broadcastOn()
    {
        // If it's a group message, broadcast to the Group Channel
        if ($this->message->group_id) {
            return new PrivateChannel('chat.group.' . $this->message->group_id);
        }

        // Otherwise, broadcast to the normal 1-on-1 channels
        return [
            new PrivateChannel('chat.' . $this->message->sender_id),
            new PrivateChannel('chat.' . $this->message->receiver_id),
        ];
    }
    
    // The name of the event the frontend will listen for
    public function broadcastAs(): string
    {
        return 'MessageSentEvent';
    }
}
