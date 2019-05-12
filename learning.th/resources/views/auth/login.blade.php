@extends('auth.layouts.user')

@section('content')

    <div class="ok11">

        <div class="main-w3lsrow">
            <!-- login form -->
            <div class="login-form login-form-left">
                <div class="agile-row">
                    <div class="head">
                        <h2>{{ __('Login') }}</h2>
                        <span class="fa fa-lock"></span>
                    </div>
                    <div class="clear"></div>
                    <div class="login-agileits-top">
                        <form action="{{route('login') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-5">
                                    <button type="submit" class="btn btn-primary" style="background: #0f9d58; margin-left: 100px">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}" style="margin-left: 80px">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    <a class="btn btn-link" href="{{ route('register') }}" style="margin-left: 80px">
                                        {{ __('Create a new account') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- //login form -->

        <div class="login-agileits-bottom1">
            <h3>or login with</h3>
        </div>

        <!-- social icons -->
        <div class="social_icons1 agileinfo1">
            <ul class="top-links1">
                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a></li>
            </ul>
        </div>
    </div>


@endsection


