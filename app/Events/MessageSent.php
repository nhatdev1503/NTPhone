<?php

namespace App\Events;

use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $roomId;
    public $sender;
    public $receiver;
    public $message;
    public $mediaPath;

    /**
     * Create a new event instance.
     */
    public function __construct($roomId, $sender, $receiver, $message , $mediaPath)
    {
        $this->roomId = $roomId;
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->message = $message;
        $this->mediaPath = $mediaPath;

        Log::info('Message Sent:', [
            'Room ID' => $roomId,
            'Sender' => $sender->username,
            'Receiver' => $receiver->username,
            'Message' => $message,
            'Image' =>$mediaPath,
        ]);
    }

    /**
     * The channel the event should broadcast on.
     */
    public function broadcastOn()
    {
        return new PrivateChannel('chat.'.$this->roomId);
    }

    /**
     * The event's broadcast name.
     */
    // public function broadcastAs()
    // {
    //     return 'message.sent';
    // }

    /**
     * The data to broadcast.
     */
    public function broadcastWith()
    {
        return [
            'roomId' => $this->roomId,
            'sender' => [
                'id' => $this->sender->id,
                'name' => $this->sender->username,
                'username' => $this->sender->username,
                'profile_picture' => $this->sender->profile_picture
            ],
            'receiver' => [
                'id' => $this->receiver->id,
                'name' => $this->receiver->username,
                'username' => $this->receiver->username,
                'profile_picture' => $this->receiver->profile_picture
            ],
            'message' => $this->message,
            'image' =>$this->mediaPath,
        ];
    }
}
