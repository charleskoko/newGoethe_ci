<?php

namespace App\Listeners;

use App\Events\NewLoanRequestEvent;
use App\Mail\NewLoanRequestMail;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class newLoanRequestListener
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
     * @param NewLoanRequestEvent $event
     * @return void
     */
    public function handle(NewLoanRequestEvent $event)
    {
        $applicant = $event->loanRequest;
        $admins = User::all()->where('is_admin','=',true);

        foreach ($admins as $admin)
        {
            Mail::to($admin->email)->send(new NewLoanRequestMail($admin, $applicant));
        }
    }
}
