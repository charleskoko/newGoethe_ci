@extends('layouts.app')
@section('content')
    <!--banner-->
    <div class="banner">
        <h2>
            <a href="{{route('home')}}">Home</a><i class="fa fa-angle-right"></i> <a href="{{route('user-panel')}}">User Panel</a> <i class="fa fa-angle-right"></i><span>Add New User</span>
        </h2>
    </div>
    <!--//banner-->
    <!--gallery-->
    <div class=" profile">

        <div class="validation-form">
            <!---->

            <form enctype="multipart/form-data" method="POST" novalidate action="{{route('user-save')}}">
                @csrf

                <div class="vali-form">
                    <div class="col-md-12 form-group2 group-mail ">
                        <label class="control-label">{{__('user.gender')}}</label>
                        <select id="gender" name="gender">
                            <option value="{{\App\User::GENDER_MALE}}">{{__('user.')}}{{\App\User::GENDER_MALE}}</option>
                            <option value="{{\App\User::GENDER_FEMALE}}" >{{__('user.')}}{{\App\User::GENDER_FEMALE}}</option>
                            <option value="{{\App\User::GENDER_DIVERS}}">{{__('user.')}}{{\App\User::GENDER_DIVERS}}</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 form-group1">
                        <label class="control-label" for="firstName">{{__('user.first_name')}}</label>
                        <input type="text"name="firstName" id="firstName" class="@error('firstName') is-invalid @enderror" required="" placeholder="Jean" >
                        @error('firstName')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group1 form-last">
                        <label class="control-label" for="lastName">{{__('user.last_name')}}</label>
                        <input type="text"  class="@error('lastName') is-invalid @enderror" name="lastName" id="lastName" required="" placeholder="De la porte">
                        @error('lastName')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-12 form-group2 group-mail ">
                    <label class="control-label">{{__('user.role')}}</label>
                    <select id="is_admin" name="is_admin">
                        <option value="{{\App\User::USER_ADMIN}}">Admin</option>
                        <option value="{{\App\User::USER_ADMIN}}" >Coworker</option>
                    </select>
                </div>
                <div class="clearfix"></div>

                <div class="col-md-12 form-group1 group-mail">
                    <label class="control-label" for="email">{{__('user.email')}}</label>
                    <input type="text" class="@error('email') is-invalid @enderror" name="email" id="email" required="" placeholder="jeandelaporte@exemple.com ">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group1 group-mail">
                    <label class="control-label" for="password">{{__('user.password')}}</label>
                    <input type="password" class="@error('password') is-invalid @enderror" name="password" id="password" required="">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="col-md-12 form-group1 group-mail">
                    <label class="control-label" for="password_confirmation">{{__('user.confirm')}}</label>
                    <input type="password" class="@error('email') is-invalid @enderror" name="password_confirmation" id="password_confirmation" required="">
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="clearfix"></div>
                <div class="clearfix"></div>

                <div class="col-md-12 form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </div>
                <div class="clearfix"></div>
            </form>

        </div>
    </div>

    </div>
    <!--//gallery-->
    <!---->
    </div>
    <div class="clearfix"> </div>
    </div>
@endsection




