@extends('layouts.app')
@section('content')
    <!--banner-->
    <div class="banner">
        <h2>
            <a href="{{route('loanRequest')}}">{{__('loanRequest.loanRequests')}}</a>
            <i class="fa fa-angle-right"></i>
            <span> {{$loanRequest->email}}</span>
        </h2>
    </div>
    <!--//banner-->
    <!--gallery-->
    <div class=" profile">

        <div class="profile-bottom">
            <h3><i class="fas fa-file-contract"></i>{{$loanRequest->email}} </h3>
            <div class="profile-bottom-top">
                <div class="col-md-8 profile-text">
                    <h6>{{$loanRequest->firstName}} {{$loanRequest->lastName}}</h6>
                    <table>
                        <tr>
                            <td>{{__('loanRequest.film_title')}}</td>
                            <td>:</td>
                            <td>{{$loanRequest->filmTitle}}</td>
                        </tr>

                        <tr>
                            <td>{{__('loanRequest.Number_of_copies')}}</td>
                            <td>:</td>
                            <td>{{$loanRequest->numberOfCopies}}</td>
                        </tr>

                        @if($loanRequest->mobile)
                            <tr>
                                <td>{{__('loanRequest.Mobile')}}</td>
                                <td> :</td>
                                <td>{{$loanRequest->mobile}}
                                </td>
                            </tr>
                        @endif
                        <tr>
                            <td>{{__('loanRequest.start_date')}}</td>
                            <td> :</td>
                            <td>
                                {{\Carbon\Carbon::parse($loanRequest->start)->diffForHumans()}} ({{$loanRequest->start}}
                                )
                            </td>
                        </tr>
                        <tr>
                            <td>{{__('loanRequest.end_date')}}</td>
                            <td> :</td>
                            <td>
                                {{\Carbon\Carbon::parse($loanRequest->end)->diffForHumans()}} ({{$loanRequest->end}})
                            </td>
                        </tr>
                        <tr>
                            <td>{{__('loanRequest.status')}}</td>
                            <td> :</td>
                            <td>
                                @if($loanRequest->status === \App\LoanRequest::STATUS_NEW)<span
                                    class="mar">{{__('loanRequest.new')}}</span>  @endif
                                @if($loanRequest->status === \App\LoanRequest::STATUS_OUTSTANDING)<span
                                    class="adm">{{__('loanRequest.outstanding')}}</span>  @endif
                                @if($loanRequest->status === \App\LoanRequest::STATUS_INPROGRESS)<span
                                    class="fam">{{__('loanRequest.in_progress')}}</span>  @endif
                                @if($loanRequest->status === \App\LoanRequest::STATUS_COMPLETED)<span
                                    class="work">{{__('loanRequest.completed')}}</span>  @endif
                                @if($loanRequest->status === \App\LoanRequest::STATUS_CANCEL)<span
                                    class="ur">{{__('loanRequest.cancel')}}</span>  @endif

                            </td>
                            <td>
                                @if($loanRequest->status !== \App\LoanRequest::STATUS_CANCEL)
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span
                                                class=" name-caret"></span><i class="fas fa-plus-circle fa-2x"></i> </a>
                                        <ul class="dropdown-menu " role="menu">
                                            @if($loanRequest->status !== \App\LoanRequest::STATUS_CANCEL)
                                                <li>
                                                    <a class="dropdown-item"
                                                       href="{{route('loanRequest-update', ['loanRequest' => $loanRequest])}}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('update-cancel').submit();"><span
                                                            class="ur">{{__('loanRequest.cancel')}}</span>
                                                    </a>
                                                </li>
                                                <form id="update-cancel"
                                                      action="{{route('loanRequest-update', ['loanRequest' => $loanRequest]) }}"
                                                      method="POST"
                                                      style="display: none;">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input name="status" value="{{\App\LoanRequest::STATUS_CANCEL}}">
                                                </form>
                                            @endif
                                            @if($loanRequest->status !== \App\LoanRequest::STATUS_COMPLETED)
                                                <li>
                                                    <a class="dropdown-item"
                                                       href="{{route('loanRequest-update', ['loanRequest' => $loanRequest])}}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('update-completed').submit();"><span
                                                            class="work">{{__('loanRequest.completed')}}</span>
                                                    </a>
                                                </li>
                                                <form id="update-completed"
                                                      action="{{route('loanRequest-update', ['loanRequest' => $loanRequest]) }}"
                                                      method="POST"
                                                      style="display: none;">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input name="status" value="{{\App\LoanRequest::STATUS_COMPLETED}}">
                                                </form>
                                            @endif
                                            @if($loanRequest->status !== \App\LoanRequest::STATUS_INPROGRESS)
                                                <li>
                                                    <a class="dropdown-item"
                                                       href="{{route('loanRequest-update', ['loanRequest' => $loanRequest])}}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('update-inProgress').submit();"><span
                                                            class="fam">{{__('loanRequest.in_progress')}}</span>
                                                    </a>
                                                </li>
                                                <form id="update-inProgress"
                                                      action="{{route('loanRequest-update', ['loanRequest' => $loanRequest]) }}"
                                                      method="POST"
                                                      style="display: none;">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input name="status"
                                                           value="{{\App\LoanRequest::STATUS_INPROGRESS}}">
                                                </form>
                                            @endif
                                            @if($loanRequest->status !== \App\LoanRequest::STATUS_OUTSTANDING)
                                                <li>
                                                    <a class="dropdown-item"
                                                       href="{{route('loanRequest-update', ['loanRequest' => $loanRequest])}}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('update-outstanding').submit();"><span
                                                            class="adm">{{__('loanRequest.outstanding')}}</span>
                                                    </a>
                                                </li>
                                                <form id="update-outstanding"
                                                      action="{{route('loanRequest-update', ['loanRequest' => $loanRequest]) }}"
                                                      method="POST"
                                                      style="display: none;">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input name="status"
                                                           value="{{\App\LoanRequest::STATUS_OUTSTANDING}}">
                                                </form>
                                            @endif
                                        </ul>
                                    </li>
                                @endif
                            </td>

                        </tr>
                    </table>
                </div>

                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    <!--//gallery-->
    <!---->
    </div>
    <div class="clearfix"></div>
    </div>
@endsection




