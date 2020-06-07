@extends('layouts.app')
@section('content')
            <!--banner-->
            <div class="banner">
                <h2>
                    <a href="index.html">Home</a>
                    <i class="fa fa-angle-right"></i>
                    <span>Profile</span>
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
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="profile-btn">

                        <button type="button" href="{{route('profile-edit')}}" class="btn bg-red"><a href="{{route('profile-edit')}}">{{__('user.edit_profile')}}</a></button>
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




