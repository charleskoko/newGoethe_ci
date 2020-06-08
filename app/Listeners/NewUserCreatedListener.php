<?php

namespace App\Listeners;

use App\Events\NewUserCreatedEvent;
use App\Mail\NewUserMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NewUserCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(NewUserCreatedEvent  $event)
    {
        $user = $event->newUser;
        $admin = $event->adminUser;

        Mail::to($user->email)->send(new NewUserMail($user, $admin));
    }
}
