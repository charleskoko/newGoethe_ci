<?php

namespace App\Events;

use App\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewUserCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $newUser;
    public $adminUser;

    /**
     * Create a new event instance.
     *
     * @param User $newUser
     * @param User $adminUser
     */
    public function __construct(User $newUser, User $adminUser)
    {
        $this->newUser = $newUser;
        $this->adminUser = $adminUser;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
