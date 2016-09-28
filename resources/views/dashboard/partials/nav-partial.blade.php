<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="#" data-activates="side-nav" class="button-collapse right"><i class="material-icons">menu</i></a>
            <a href="{{ url('/') }}" class="brand-logo left hide-on-large-only">
                <img src="{{ asset('images/logo.png') }}" width="300" height="30" alt="@lang('navigation.logoalt')" />
            </a>

            <div class="row">
                <!--<ul id="nav-mobile" class="hide-on-med-and-down col offset-s4">
                    <li><a href="{{ url('/') }}"{!! \Request::is('/') ? ' class="active"' : '' !!}>@lang('navigation.home')</a></li>
                    <li><a href="{{ url('/how-it-works') }}"{!! \Request::is('how-it-works') ? ' class="active"' : '' !!}>@lang('navigation.howitworks')</a></li>
                    <li><a href="{{ url('/history') }}"{!! \Request::is('history') ? ' class="active"' : '' !!}>@lang('navigation.history')</a></li>
                    <li><a href="{{ url('/bookkeeping') }}"{!! \Request::is('bookkeeping') ? ' class="active"' : '' !!}>@lang('navigation.bookkeeping')</a></li>
                    <li><a href="{{ url('/contact') }}"{!! \Request::is('contact') ? ' class="active"' : '' !!}>@lang('navigation.contact')</a></li>
                </ul>-->

                <ul class="right nav-login">
                    @if (Auth::guest())
                        <li>
                            @if (!\Agent::isMobile())
                                <a href="#login-modal" class="modal-trigger">@lang('navigation.login')</a>
                            @else
                                <a href="{{ url('/login') }}"{!! \Request::is('login') ? ' class="active"' : '' !!}>@lang('navigation.login')</a>
                            @endif
                        </li>
                    @else
                        <li><a class="dropdown-button" href="#!" data-activates="account-dropdown" data-beloworigin="true"><i class="material-icons right">account_circle</i></a></li>
                        <ul id="account-dropdown" class="dropdown-content">
                            <div class="caret"></div>
                            <li><a href="/dashboard">@lang('navigation.dashboard')</a></li>
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

<ul id="side-nav" class="side-nav fixed">
    <li><a href="/" class="logo"><img src="{{ asset('images/logo.png') }}" width="80%" alt="@lang('navigation.logoalt')" style="margin-top: 20px;" /></a></li>
    <li><div class="divider"></div></li>

    <li><a href="{{ url('/dashboard') }}" class="waves-effect{!! \Request::is('/') ? ' active' : '' !!}"><i class="material-icons">&#xE871;</i> @lang('dashboard.dashboard')</a></li>
    <li><a href="{{ url('#') }}" class="waves-effect{!! \Request::is('how-it-works') ? ' active' : '' !!}"><i class="material-icons">&#xE851;</i> @lang('dashboard.account-summary')</a></li>
    <li><a href="{{ url('#') }}" class="waves-effect{!! \Request::is('history') ? ' active' : '' !!}"><i class="material-icons">&#xE84F;</i> @lang('dashboard.billing')</a></li>
    <li><a href="{{ url('#') }}" class="waves-effect{!! \Request::is('bookkeeping') ? ' active' : '' !!}"><i class="material-icons">&#xE0AF;</i> @lang('dashboard.organization')</a></li>
    <li><a href="{{ url('#') }}" class="waves-effect{!! \Request::is('contact') ? ' active' : '' !!}"><i class="material-icons">&#xE8D3;</i> @lang('dashboard.user-management')</a></li>
</ul>