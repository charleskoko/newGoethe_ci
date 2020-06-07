@extends('layouts.app')
@section('content')
    <!--banner-->
    <div class="banner">
        <h2>
            <a href="{{route('home')}}">Dashboard</a><i class="fa fa-angle-right"></i> <span> User panel</span>
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
                            USERS - OVERVIEW
                            </div>

                        </div>
                        <div class="float-right">
                            <a type="button" href="{{route('user-create')}}" class="btn btn-primary">Add New User</a>
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
                                    @if($user->is_admin === true)<span class="adm">Admin</span> @else <span class="mar">Coworker</span> @endif
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
                                                <a href="{{route('user-edit', ['user' => $user])}}" title="">
                                                    <i class="fa fa-pencil-square-o icon_9"></i>
                                                    Edit
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{route('user-delete', ['user' => $user])}}" class="font-red" title="">
                                                    <i class="fa fa-times" icon_9=""></i>
                                                    Delete
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
