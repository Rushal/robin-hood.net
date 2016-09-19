@extends('layouts.primary-layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="login col m6 offset-m3">

                <div class="col s12">
                    <ul class="tabs page">
                        <li class="tab col s3"><a href="#login-page" class="active">@lang('navigation.login')</a></li>
                        <li class="tab col s3"><a href="#register-page">@lang('navigation.register')</a></li>
                    </ul>
                </div>

                <div id="login-page">
                    <form role="form" method="POST" action="{{ url('/login') }}" class="col s12">
                        {{ csrf_field() }}

                        <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus>
                            <label for="email">@lang('navigation.email.long')</label>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="validate" name="password" required>
                            <label for="password">@lang('navigation.password')</label>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="checkbox center col s12" style="margin: 15px 0;">
                            <input type="checkbox" id="remember-me" name="remember">
                            <label for="remember-me">@lang('navigation.remember')</label>
                        </div>

                        <div class="col s12 center">
                            <button type="submit" class="btn waves-effect">@lang('navigation.login')</button>
                            <a class="btn-flat" href="{{ url('/password/reset') }}">@lang('navigation.password.reset')</a>
                        </div>
                    </form>
                </div>

                <div id="register-page">
                    <form role="form" method="POST" action="{{ url('/register') }}" class="col s12">
                        {{ csrf_field() }}

                        <div class="input-field col s12{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required autofocus>
                            <label for="name">@lang('navigation.name')</label>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                            <label for="email">@lang('navigation.email.long')</label>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="validate" name="password" required>
                            <label for="password">@lang('navigation.password')</label>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="input-field col s12{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>
                            <label for="password-confirm">@lang('navigation.password.confirm')</label>

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="col s12 center">
                            <button type="submit" class="btn waves-effect">@lang('navigation.register')</button>
                        </div>
                    </form>
                </div>
                <div style="clear: both;"></div>

            </div>
        </div>
    </div>
@endsection
