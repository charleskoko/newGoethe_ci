@extends('layouts.app')
@section('content')
    <!--banner-->
    <div class="banner">
        <h2>
            <a href="#">{{__('loanRequest.loanRequests')}}</a>
        </h2>

    </div>
    <!--//banner-->
    <!--gallery-->
    <div class=" profile">
        <!-- tab content -->
        <div class="tab-pane active text-style" id="tab1">
            <div class="inbox-right">

                <div class="mailbox-content">
                    <div class="mail-toolbar clearfix">
                        <div class="float-left">
                            <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
                                <a type="button" href="{{route('loanRequest-create')}}" class="btn btn-primary">{{__('movie.add_new_loanRequest')}}</a>

                            </div>

                        </div>

                        <div class="float-right">
                            {{$loanRequests->links('pagination.pagination')}}
                        </div>
                    </div>
                    <table class="table">
                        <tbody>
                        @foreach($loanRequests as $loanRequest)
                            <tr class="table-row">
                                <td class="table-text">
                                    <h6>{{$loanRequest->firstName}} {{$loanRequest->lastName}}</h6>
                                    <p>{{$loanRequest->start}} - {{$loanRequest->end}}</p>
                                </td>
                                <td>
                                    @if($loanRequest->status === \App\LoanRequest::STATUS_NEW)<span class="mar">{{__('loanRequest.new')}}</span>  @endif
                                    @if($loanRequest->status === \App\LoanRequest::STATUS_OUTSTANDING)<span class="adm">{{__('loanRequest.outstanding')}}</span>  @endif
                                    @if($loanRequest->status === \App\LoanRequest::STATUS_INPROGRESS)<span class="fam">{{__('loanRequest.in_progress')}}</span>  @endif
                                    @if($loanRequest->status === \App\LoanRequest::STATUS_COMPLETED)<span class="work">{{__('loanRequest.completed')}}</span>  @endif
                                    @if($loanRequest->status === \App\LoanRequest::STATUS_CANCEL)<span class="ur">{{__('loanRequest.cancel')}}</span>  @endif
                                </td>
                                <td class="march">
                                    {{$loanRequest->numberOfCopies}} {{__('loanRequest.copies')}}
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i
                                                class="fas fa-cog"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li>
                                                <a href="{{route('loanRequest-edit', ['loanRequest' => $loanRequest])}}">
                                                    <i class="fa fa-pencil-square-o icon_9"></i>
                                                    {{__('loanRequest.Edit')}}
                                                </a>
                                            </li>

                                            <li>
                                                <form id="user-delete-{{$loanRequest->id}}" method="post"
                                                      action="{{route('loanRequest-delete', ['loanRequest' => $loanRequest])}}">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <a href="{{route('loanRequest-delete', ['loanRequest' => $loanRequest])}}"
                                                   onclick="event.preventDefault(); if(confirm('{{__('loanRequest.movieDeleteMessage')}} - {{$loanRequest->email}}'))
                                                       {document.getElementById('loanRequest-delete-{{$loanRequest->id}}').submit();}">
                                                    <i class="fa fa-times" icon_9=""></i>
                                                    {{__('loanRequest.Delete')}}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <div class="clearfix"></div>

    </div>

    <!--//grid-->
    <!---->
@endsection
