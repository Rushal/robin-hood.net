<div id="login-modal" class="modal login-modal">
    <ul class="tabs">
        <li class="tab"><a href="#login" class="active">@lang('navigation.login')</a></li>
        <li class="tab"><a href="#register">@lang('navigation.register')</a></li>
    </ul>

    <div class="modal-content">
        <div class="row">
            <div id="login" class="col s12">
                <form role="form" method="POST" action="{{ url('/login') }}">
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

                    <div class="checkbox center" style="margin-bottom: 15px;">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">@lang('navigation.remember')</label>
                    </div>

                    <div class="col s12 center">
                        <button type="submit" class="btn waves-effect">@lang('navigation.login')</button>
                        <a class="btn-flat" href="{{ url('/password/reset') }}">@lang('navigation.password.reset')</a>
                    </div>
                </form>
            </div>
            <div id="register" class="col s12">
                <form role="form" method="POST" action="{{ url('/register') }}">
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
        </div>

    </div>
</div>