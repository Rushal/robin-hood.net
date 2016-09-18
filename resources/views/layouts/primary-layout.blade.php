<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/robin-hood.css') }}">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>
<div class="bg"></div>

<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="#" data-activates="side-nav" class="button-collapse right"><i class="material-icons">menu</i></a>
            <a href="#" class="brand-logo left">
                <img src="{{ asset('images/logo.png') }}" width="300" height="30" alt="@lang('navigation.logoalt')" />
            </a>

            <div class="row">
                <ul id="nav-mobile" class="hide-on-med-and-down col offset-s4">
                    <li><a href="/" class="active">HOME</a></li>
                    <li><a href="/howitworks">HOW IT WORKS</a></li>
                    <li><a href="/howitworks">HISTORY</a></li>
                    <li><a href="/howitworks">BOOKKEEPING</a></li>
                    <li><a href="/howitworks">CONTACT</a></li>
                </ul>

                <ul class="right nav-login">
                    <li>
                        <!--<a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Login" href="/login">
                            <i class="material-icons">lock</i>-->
                        <a href="#login-modal" class="modal-trigger">
                            LOGIN
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<ul id="side-nav" class="side-nav">

    <li><a href="#!"><img src="{{ asset('images/logo.png') }}" width="80%" alt="@lang('navigation.logoalt')" style="margin-top: 20px;" /></a></li>
    <li><div class="divider"></div></li>

    <li><a href="/" class="waves-effect active">HOME</a></li>
    <li><a href="/howitworks" class="waves-effect">HOW IT WORKS</a></li>
    <li><a href="#" class="waves-effect">HISTORY</a></li>
    <li><a href="#" class="waves-effect">BOOKKEEPING</a></li>
    <li><a href="#" class="waves-effect">CONTACT</a></li>
</ul>

<div id="login-modal" class="modal login-modal">

    <div>
        <ul class="tabs">
            <li class="tab"><a href="#login" class="active">Login</a></li>
            <li class="tab"><a href="#register">Register</a></li>
        </ul>
    </div>

    <div class="modal-content">
        <div class="row">
            <div id="login" class="col s12">
                <form role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus>
                        <label for="email">E-Mail Address</label>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="validate" name="password" required>
                        <label for="password">Password</label>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="checkbox center" style="margin-bottom: 15px;">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Remember Me</label>
                    </div>

                    <div class="col s12 center">
                        <button type="submit" class="btn waves-effect">Login</button>
                        <a class="btn-flat" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                    </div>
                </form>
            </div>
            <div id="register" class="col s12">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

@yield('content')

<!-- Scripts -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script>
    $(".button-collapse").sideNav({
        menuWidth: 250,
        edge: 'right',
        closeOnClick: true
    });

    $(document).ready(function() {
        $('.modal-trigger').leanModal({
            ready: function () {
                $('ul.tabs').tabs();
            }
        });

        var planks = 0;
        $(".plank").hover( function () {
            if($(this).css('opacity') == 0) {
                $(this).fadeTo("slow", 1.0);
                planks++;
                if(planks >= 21){
                    $(".treasure").fadeTo("slow", 1.0);
                }
            }
        });
    });
</script>

</body>
</html>