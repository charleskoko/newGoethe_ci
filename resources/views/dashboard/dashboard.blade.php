@extends('layouts.app')
@section('content')
    <!--banner-->
    <div class="banner">
        <h2>
            <a href="{{route('home')}}">{{__('user.Dashboard')}}</a>
        </h2>
    </div>
    <!--//banner-->
    <!--gallery-->
    <div class=" profile">
        <!--grid-->
        <div class="inbox-mail">
            <div class="col-md-4 ">
                <div class="content-top-1">
                    <div class="col-md-6 top-content">
                        <h5>Tasks</h5>
                        <label>8761</label>
                        <a href="{{route('push')}}" class="btn btn-outline-primary btn-block">Make a Push Notification!</a>

                    </div>
                    <div class="col-md-6 top-content1">
                        <div id="demo-pie-1" class="pie-title-center" data-percent="25"><span
                                class="pie-value"></span></div>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
            <!-- tab content -->
            <div class="col-md-8 tab-content tab-content-in">
                <div class="tab-pane active text-style" id="tab1">
                    <div class="inbox-right">

                        <div class="mailbox-content">
                            <div class="mail-toolbar clearfix">
                                <div class="float-left">
                                    <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
                                        <div class="btn-group">
                                            <a class="btn btn-default"><i class="fa fa-download icon_9"></i></a>
                                        </div>
                                    </div>


                                </div>
                                <div class="float-right">
                                    <div class="float-right">
                                        {{$loanRequests->links('pagination.pagination')}}
                                    </div>
                                </div>

                            </div>
                            <table class="table" id="table">
                                <tbody>
                                @foreach($loanRequests as $loanRequest)
                                    <tr class="table-row">
                                        <td class="table-text">
                                            <h6> {{$loanRequest->firstName}} {{$loanRequest->lastName}}</h6>
                                            <p>{{$loanRequest->start}} - {{$loanRequest->end}}</p>
                                        </td>
                                        <td>
                                            <span class="mar">{{__('loanRequest.new')}}</span>
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

    </div>

    <!--//grid-->
    <!---->

@endsection




