<?php

namespace App\Http\Controllers\Frontend;

use App\Events\NewLoanRequestEvent;
use App\Http\Controllers\Controller;
use App\LoanRequest;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'start' => 'required | date',
            'end' => 'required | date |after_or_equal:start',
            'email' => 'required | email',
            'numberOfCopies' => 'required | numeric',
            'firstName' => 'required | string',
            'lastName' => 'required | string',
            'mobile' => 'nullable | numeric',
            'filmTitle' => 'required | string',
            'radio' => 'required',
        ]);

        $validatedData['status'] = LoanRequest::STATUS_NEW;

        $loanRequest = LoanRequest::create($validatedData);

        event(new NewLoanRequestEvent($loanRequest));

        return redirect()->back()->with('success', trans('translate.infoNewRequest'));
    }
}
