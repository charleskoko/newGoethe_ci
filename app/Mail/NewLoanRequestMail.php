<?php

namespace App\Mail;

use App\LoanRequest;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewLoanRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $admin;
    public $applicant;

    /**
     * Create a new message instance.
     *
     * @param User $admin
     * @param LoanRequest $applicant
     */
    public function __construct(User $admin, LoanRequest $applicant)
    {
        $this->admin = $admin;
        $this->applicant = $applicant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.newLoanRequestMail')
            ->subject(trans('translate.new_loan_request'))
            ->with([
                'applicant' => $this->applicant,
                'admin' => $this->admin
            ]);
    }
}
