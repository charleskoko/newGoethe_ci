<?php

namespace App\Http\Controllers\LoanRequest;

use App\Events\NewLoanRequestEvent;
use App\Http\Controllers\Controller;
use App\LoanRequest;
use Illuminate\Http\Request;

class LoanRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('loanRequest.overview',
            [
                'loanRequests' => LoanRequest::filter($request->all())->orderBy('created_at', 'desc')->paginate(4),
                'request' => $request
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loanRequest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'start' => 'required | date',
            'end' => 'required | date',
            'email' => 'required | string',
            'numberOfCopies' => 'required | numeric',
            'firstName' => 'required | string',
            'lastName' => 'required | string',
            'mobile' => 'nullable | numeric',
            'filmTitle' => 'nullable | string',

        ]);

        $validatedData['status'] = LoanRequest::STATUS_NEW;

        $loanRequest = LoanRequest::create($validatedData);

        event(new NewLoanRequestEvent($loanRequest));

        return redirect(route('loanRequest'))->with('toast_success',
            trans('translate.new_loanRequest_created', ['data' => $loanRequest->email]));

    }

    /**
     * Display the specified resource.
     *
     * @param \App\LoanRequest $loanRequest
     * @return \Illuminate\Http\Response
     */
    public function view(LoanRequest $loanRequest)
    {
        return view('loanRequest.view', ['loanRequest' => $loanRequest]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\LoanRequest $loanRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(LoanRequest $loanRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\LoanRequest $loanRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, LoanRequest $loanRequest)
    {

        if ($request->has('status')) {
            $validateData = $request->validate([
                'status' => 'required | string| max:255',
            ]);

            $loanRequest->update($validateData);

            return redirect()->back()->with('toast_success',
                trans('translate.status_updated', ['data' => $validateData['status']]));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\LoanRequest $loanRequest
     * @return \Illuminate\Http\Response
     */
    public function delete(LoanRequest $loanRequest)
    {
        $deleteLoanRequest = $loanRequest->email;
        $loanRequest->delete();

        return redirect()->back();
    }

    public function filter(Request $request)
    {

    }
}
