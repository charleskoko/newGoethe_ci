@extends('layouts.app')
@section('content')
    <!--banner-->
    <div class="banner">
        <h2>
            <a href="{{route('home')}}">Dashboard</a><i class="fa fa-angle-right"></i> <span>{{__('user.user_panel')}}</span>
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
                                <div style="text-transform: uppercase">{{__('user.users_overview')}}</div>
                            </div>

                        </div>
                        <div class="float-right">
                            <a type="button" href="{{route('user-create')}}" class="btn btn-primary">{{__('user.add_new_user')}}</a>
                        </div>
                    </div>
                    <table class="table">
                        <tbody>
                        @foreach($users as $user)
                            <tr class="table-row">
                                <td class="table-text">
                                    <h6>{{$user->getNormalName()}}</h6>
                                    <p>{{$user->email}}</p>
                                </td>
                                <td>
                                    @if($user->is_admin === true)<span class="adm">{{__('user.Admin')}}</span> @else <span class="mar">{{__('user.Coworker')}}</span> @endif
                                </td>
                                <td class="march">
                                    {{$user->gender}}
                                </td>

                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i
                                                class="fas fa-cog"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li>
                                                <a href="{{route('user-edit', ['user' => $user])}}">
                                                    <i class="fa fa-pencil-square-o icon_9"></i>
                                                    {{__('user.Edit')}}
                                                </a>
                                            </li>

                                            <li>
                                                <form id="user-delete-{{$user->id}}" method="post" action="{{route('user-delete', ['user' => $user])}}">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <a href="{{route('user-delete', ['user' => $user])}}" onclick="event.preventDefault(); if(confirm('{{__('user.userDeleteMessage')}} - {{$user->getNormalName()}}'))
                                                    {document.getElementById('user-delete-{{$user->id}}').submit();}">
                                                    <i class="fa fa-times" icon_9=""></i>
                                                    {{__('user.Delete')}}
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
