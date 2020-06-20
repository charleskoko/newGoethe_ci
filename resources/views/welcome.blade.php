<!DOCTYPE HTML>
<html>
<head>
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet">
    <script src="js/jquery.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script>
</head>
<body>
<div class="login">
    <h1><a>{{__('translate.mediatheque')}}</a></h1>
    <form method="post" action="{{route('frontend-new-request')}}">
        @csrf
        <div class="login-bottom">
            <h2>{{__('loanRequest.loan_request1')}}</h2>
            <div class="vali-form">
                <div class="col-md-6 form-group1">
                    <label class="control-label" for="firstName">{{__('user.first_name')}} *</label>
                    <input type="text" placeholder="Jean" name="firstName" id="firstName" value="{{old('firstName')}}"/>
                    @if($errors->has('firstName'))
                        <div class="text-danger">{{$errors->first('firstName')}}</div>
                    @endif

                </div>
                <div class="col-md-6 form-group1 form-last">
                    <label class="control-label" for="lastName">{{__('user.last_name')}} *</label>
                    <input type="text" placeholder="Yves Armand Debordeau" name="lastName" id="lastName" value="{{old('lastName')}}" >
                    @if($errors->has('lastName'))
                        <div class="text-danger">{{$errors->first('lastName')}}</div>
                    @endif

                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="vali-form">
                <div class="col-md-6 form-group1">
                    <label class="control-label" for="email">{{__('user.email')}} *</label>
                    <input type="text" placeholder="Jean@example.com" name="email" id="email" value="{{old('email')}}" >
                    @if($errors->has('email'))
                        <div class="text-danger">{{$errors->first('email')}}</div>
                    @endif
                </div>
                <div class="col-md-6 form-group1 form-last">
                    <label class="control-label" for="mobile">{{__('user.mobile')}}</label>
                    <input type="text" placeholder="+225 58741236" name="mobile" id="mobile" value="{{old('mobile')}}">
                    @if($errors->has('mobile'))
                        <div class="text-danger">{{$errors->first('mobile')}}</div>
                    @endif
                </div>
                <div class="clearfix"> </div>
            </div>

            <div class="vali-form">
                <div class="col-md-6 form-group1">
                    <label class="control-label" for="filmTitle">{{__('loanRequest.film_title')}} *</label>
                    <input type="text" placeholder="The one" name="filmTitle" id="filmTitle" value="{{old('filmTitle')}}">
                    @if($errors->has('filmTitle'))
                        <div class="text-danger">{{$errors->first('filmTitle')}}</div>
                    @endif
                </div>
                <div class="col-md-6 form-group1 form-last">
                    <label class="control-label" for="numberOfCopies">{{__('loanRequest.Number_of_copies')}} *</label>
                    <input type="text" placeholder="4" name="numberOfCopies" id="numberOfCopies "  value="{{old('numberOfCopies')}}">
                    @if($errors->has('numberOfCopies'))
                        <div class="text-danger">{{$errors->first('numberOfCopies')}}</div>
                    @endif
                </div>
                <div class="clearfix"> </div>
            </div>

            <div class="vali-form">
                <div class="col-md-6 form-group1">
                    <label class="control-label" for="start">{{__('loanRequest.start_date')}} *</label>
                    <input type="date" name="start" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" value="{{old('start')}}" >
                    @if($errors->has('start'))
                        <div class="text-danger">{{$errors->first('start')}}</div>
                    @endif
                </div>
                <div class="col-md-6 form-group1 form-last">
                    <label class="control-label" for="end">{{__('loanRequest.end_date')}} *</label>
                    <input type="date" name="end" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" value="{{old('end')}}">
                    @if($errors->has('end'))
                        <div class="text-danger">{{$errors->first('end')}}</div>
                    @endif
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="radio block"><label>
                    @if($errors->has('radio'))
                        <div class="text-danger">{{$errors->first('radio')}} *</div>
                    @endif
                    <input type="checkbox" name="radio"> {{__('translate.consentement')}}
                </label>
            </div>
            </a>

            <div class="col-md-6 login-do">
                <label class="hvr-shutter-in-horizontal login-sub">
                    <input type="submit" value="Submit">
                </label>
            </div>


            <div class="clearfix"> </div>
        </div>
    </form>
</div>
<!---->
<div class="copy-right">
    <p> &copy; 2020 <a href="{{route('login')}}" target="_blank">{{__('translate.Administration')}}.</a> All Rights Reserved | Created by <a href="http://w3layouts.com/" target="_blank">K make Web</a> </p>	    </div>
@include('sweetalert::alert')
<!---->
<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->
</body>
</html>

