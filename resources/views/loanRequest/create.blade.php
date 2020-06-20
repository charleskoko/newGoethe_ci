@extends('layouts.app')
@section('content')
    <!--banner-->
    <div class="banner">
        <h2>
            <a href="{{route('loanRequest')}}">{{__('loanRequest.loan_request')}}</a><i class="fa fa-angle-right"></i> <span>{{__('movie.add_new_loan_request')}}</span>
        </h2>
    </div>
    <!--//banner-->
    <!--gallery-->
    <div class=" profile">

        <div class="validation-form">
            <!---->

            <form enctype="multipart/form-data" method="POST" action="{{route('loanRequest-save')}}">
                @csrf
                <div class="vali-form">
                    <div class="col-md-6 form-group1">
                        <label class="control-label" for="firstName">{{__('user.first_name')}}</label>
                        <input type="text" placeholder="Jean" name="firstName" id="firstName">
                        @if($errors->has('firstName'))
                            <div class="text-danger">{{$errors->first('firstName')}}</div>
                        @endif
                    </div>
                    <div class="col-md-6 form-group1 form-last">
                        <label class="control-label" for="lastName">{{__('user.last_name')}}</label>
                        <input type="text" placeholder="Yves Armand Debordeau" name="lastName" id="lastName">
                        @if($errors->has('lastName'))
                            <div class="text-danger">{{$errors->first('lastName')}}</div>
                        @endif
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="vali-form">
                    <div class="col-md-6 form-group1">
                        <label class="control-label" for="firstName">{{__('user.email')}}</label>
                        <input type="text" placeholder="Jean@example.com" name="email" id="email" >
                        @if($errors->has('email'))
                            <div class="text-danger">{{$errors->first('email')}}</div>
                        @endif
                    </div>
                    <div class="col-md-6 form-group1 form-last">
                        <label class="control-label" for="lastName">{{__('user.mobile')}}</label>
                        <input type="text" placeholder="+225 58741236" name="mobile" id="mobile" >
                        @if($errors->has('mobile'))
                            <div class="text-danger">{{$errors->first('mobile')}}</div>
                        @endif
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <div class="vali-form">
                    <div class="col-md-6 form-group1">
                        <label class="control-label" for="firstName">{{__('loanRequest.film_title')}}</label>
                        <input type="text" placeholder="The one" name="filmTitle" id="filmTitle" >
                        @if($errors->has('filmTitle'))
                            <div class="text-danger">{{$errors->first('filmTitle')}}</div>
                        @endif
                    </div>
                    <div class="col-md-6 form-group1 form-last">
                        <label class="control-label" for="lastName">{{__('loanRequest.number_of_copies')}}</label>
                        <input type="text" placeholder="4" name="numberOfCopies" id="numberOfCopies "  >
                        @if($errors->has('numberOfCopies'))
                            <div class="text-danger">{{$errors->first('numberOfCopies')}}</div>
                        @endif
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <div class="vali-form">
                    <div class="col-md-6 form-group1">
                        <label class="control-label" for="firstName">{{__('loanRequest.start')}}</label>
                        <input type="date" name="start" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" >
                        @if($errors->has('start'))
                            <div class="text-danger">{{$errors->first('start')}}</div>
                        @endif
                    </div>
                    <div class="col-md-6 form-group1 form-last">
                        <label class="control-label" for="lastName">{{__('loanRequest.number_of_copies')}}</label>
                        <input type="date" name="end" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" >
                        @if($errors->has('end'))
                            <div class="text-danger">{{$errors->first('end')}}</div>
                        @endif
                    </div>
                    <div class="clearfix"> </div>
                </div>


                <div class="col-md-12 form-group">
                    <button type="submit" class="btn btn-primary">{{__('user.Submit')}}</button>
                    <button type="reset" class="btn btn-default">{{__('user.Cancel')}}</button>
                </div>
                <div class="clearfix"> </div>
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




