<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="#" data-activates="side-nav" class="button-collapse right"><i class="material-icons">menu</i></a>
            <a href="#" class="brand-logo left">
                <img src="{{ asset('images/logo.png') }}" width="300" height="30" alt="@lang('navigation.logoalt')" />
            </a>

            <div class="row">
                <ul id="nav-mobile" class="hide-on-med-and-down col offset-s4">
                    <li><a href="/" class="active">@lang('navigation.home')</a></li>
                    <li><a href="/howitworks">@lang('navigation.howitworks')</a></li>
                    <li><a href="/howitworks">@lang('navigation.history')</a></li>
                    <li><a href="/howitworks">@lang('navigation.bookkeeping')</a></li>
                    <li><a href="/howitworks">@lang('navigation.contact')</a></li>
                </ul>

                <ul class="right nav-login">
                    @if (Auth::guest())
                        <li>
                            <a href="#login-modal" class="modal-trigger">@lang('navigation.login')</a>
                        </li>
                    @else
                        <li><a class="dropdown-button" href="#!" data-activates="account-dropdown" data-beloworigin="true"><i class="material-icons right">account_circle</i></a></li>
                        <ul id="account-dropdown" class="dropdown-content">
                            <div class="caret"></div>
                            <li><a href="#!">@lang('navigation.dashboard')</a></li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">@lang('navigation.logout')</a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>

<ul id="side-nav" class="side-nav">
    <li><a href="#!"><img src="{{ asset('images/logo.png') }}" width="80%" alt="@lang('navigation.logoalt')" style="margin-top: 20px;" /></a></li>
    <li><div class="divider"></div></li>

    <li><a href="/" class="waves-effect active">@lang('navigation.home')</a></li>
    <li><a href="/howitworks" class="waves-effect">@lang('navigation.howitworks')</a></li>
    <li><a href="#" class="waves-effect">@lang('navigation.history')</a></li>
    <li><a href="#" class="waves-effect">@lang('navigation.bookkeeping')</a></li>
    <li><a href="#" class="waves-effect">@lang('navigation.contact')</a></li>
</ul>