@extends('layouts.LoginApp')

@section('content')
    <div class="login">
        <div class="login-bottom">
            <h2>Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="col-md-6">
                    @error('email')
                    <span class="invalid-feedback" style="background-color: red" role="alert">
                                        <div class="alert alert-primary" role="alert">{{$message}}</div>
                                    </span>
                    @enderror
                    <div class="login-mail">
                        <input type="text" name="email" class="@error('password') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" required="" autocomplete="email" autofocus>
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="login-mail">
                        <input type="password"  name="password" class="@error('password') is-invalid @enderror"  autocomplete="current-password" placeholder="Password" required="">
                        <i class="fa fa-lock"></i>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <a class="news-letter " href="#">
                        <label class="checkbox1"  for="remember">
                            <input type="checkbox" name="remember" id="remember"><i> </i>{{ __('Remember Me') }}</label>
                    </a>

                </div>
                <div class="col-md-6 login-do">
                    <label class="hvr-shutter-in-horizontal login-sub">
                        <input type="submit" value="login">
                    </label>
                </div>

                <div class="clearfix"> </div>
            </form>
        </div>
    </div>
@endsection
