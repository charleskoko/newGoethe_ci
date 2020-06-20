<?php

namespace App\Http\Controllers;

use App\LoanRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.dashboard', [
            'loanRequests' => LoanRequest::where('status', '=', LoanRequest::STATUS_NEW)->orderBy('created_at', 'desc')->paginate(15)
        ]);
    }

}
