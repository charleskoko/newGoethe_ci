@extends('layouts.app')
@section('content')
    <!--banner-->
    <div class="banner">
        <h2>
            <a href="{{route('home')}}">{{__('user.Dashboard')}}</a>
            <i class="fa fa-angle-right"></i>
            <span>{{__('user.profile')}}</span>
        </h2>
    </div>
    <!--//banner-->
    <!--gallery-->
    <div class=" profile">

        <div class="profile-bottom">
            <h3><i class="fa fa-user"></i>{{__('user.profile')}}</h3>
            <div class="profile-bottom-top">
                <div class="col-md-4 profile-bottom-img">
                    <img src="images/pr.jpg" alt="">
                </div>
                <div class="col-md-8 profile-text">
                    <h6>{{\Illuminate\Support\Facades\Auth::user()->getNormalName()}}</h6>
                    <table>
                        <tr>
                            <td>{{__('user.first_name')}}</td>
                            <td>:</td>
                            <td>{{\Illuminate\Support\Facades\Auth::user()->firstName}}</td></tr>

                        <tr>
                            <td>{{__('user.last_name')}}</td>
                            <td>:</td>
                            <td>{{\Illuminate\Support\Facades\Auth::user()->lastName}}</td></tr>

                        <tr>
                            <td>{{__('user.email')}}</td>
                            <td> :</td>
                            <td><a href="info@gmail.com">{{\Illuminate\Support\Facades\Auth::user()->email}}</a></td>
                        </tr>
                        <tr>
                            <td>{{__('user.role')}}</td>
                            <td> :</td>
                            <td>@if(\Illuminate\Support\Facades\Auth::user()->is_admin === true)<span class="adm">{{__('user.Admin')}}</span> @else <span class="mar">{{__('user.Coworker')}}</span> @endif
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="profile-btn">
                <a type="button" href="{{route('profile-edit')}}" class="btn btn-primary">{{__('user.edit_profile')}}</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--//gallery-->
    <!---->
    </div>
    <div class="clearfix"> </div>
    </div>
@endsection




