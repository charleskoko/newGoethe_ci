@extends('layouts.app')
@section('content')
    <!--banner-->
    <div class="banner">
        <h2>
            <a href="{{route('home')}}">Home</a><i class="fa fa-angle-right"></i><span>Edit Profile</span>
        </h2>
    </div>
    <!--//banner-->
    <!--grid-->
    <div class="validation-system">

        <div class="validation-form">
            <!---->

            <form enctype="multipart/form-data" method="POST" novalidate action="{{route('profile-update')}}">
                @csrf
                @method('PATCH')

                <div class="vali-form">
                    <div class="col-md-12 form-group2 group-mail ">
                        <label class="control-label">{{__('user.gender')}}</label>
                        <select id="gender" name="gender">
                            <option value="{{\App\User::GENDER_MALE}}" @if($user->gender === \App\User::GENDER_MALE) selected @endif>{{__('user.')}}{{\App\User::GENDER_MALE}}</option>
                            <option value="{{\App\User::GENDER_FEMALE}}" @if($user->gender === \App\User::GENDER_FEMALE) selected @endif>{{__('user.')}}{{\App\User::GENDER_FEMALE}}</option>
                            <option value="{{\App\User::GENDER_DIVERS}}" @if($user->gender === \App\User::GENDER_DIVERS) selected @endif>{{__('user.')}}{{\App\User::GENDER_DIVERS}}</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 form-group1">
                        <label class="control-label" for="firstName">{{__('user.first_name')}}</label>
                        <input type="text"name="firstName" id="firstName" class="@error('firstName') is-invalid @enderror" required="" value="{{$user->firstName}}">
                        @error('firstName')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group1 form-last">
                        <label class="control-label" for="lastName">{{__('user.last_name')}}</label>
                        <input type="text"  class="@error('lastName') is-invalid @enderror" name="lastName" id="lastName" required="" value="{{$user->lastName}}">
                        @error('lastName')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-12 form-group1 group-mail">
                    <label class="control-label" for="email">{{__('user.email')}}</label>
                    <input type="text" class="@error('email') is-invalid @enderror" name="email" id="email" required="" value="{{$user->email}}">
                    @error('email')
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
    <div class="clearfix"></div>
    </div>
@endsection



