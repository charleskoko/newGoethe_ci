<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewUserMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $adminUser;

    /**
     * Create a new message instance.
     *
     * @param User $user
     * @param User $adminUser
     */
    public function __construct(User $user, User $adminUser)
    {
        $this->user = $user;
        $this->adminUser = $adminUser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.newUserMail')
            ->subject(trans('translate.Welcome'))
            ->with([
                'user' => $this->user,
                'admin' => $this->adminUser
            ]);
    }
}
