<div class="navbar-fixed hide-on-large-only">
    <nav>
        <div class="nav-wrapper">
            <a href="#" data-activates="side-nav" class="button-collapse right"><i class="material-icons">menu</i></a>
            <a href="{{ url('/') }}" class="brand-logo left hide-on-large-only">
                <img src="{{ asset('images/logo.png') }}" width="300" height="30" alt="@lang('navigation.logoalt')" />
            </a>

            <div class="row">
                <ul class="right nav-login">
                    <li><a href="{{ url('/dashboard') }}" class="hide-on-small-only inline waves-effect tooltipped active" data-tooltip="@lang('dashboard.dashboard')"><i class="material-icons">&#xE871;</i></a></li>
                    <li><a href="#" class="hide-on-small-only inline waves-effect tooltipped" data-tooltip="@lang('dashboard.account-summary')"><i class="material-icons">&#xE8A6;</i></a></li>
                    <li>
                        <a href="{{ url('/logout') }}" class="tooltipped" data-tooltip="@lang('navigation.logout')" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">&#xE879;</i></a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<ul id="side-nav" class="side-nav fixed">
    <li><a href="/" class="logo"><img src="{{ asset('images/logo.png') }}" width="80%" alt="@lang('navigation.logoalt')" style="margin-top: 20px;" /></a></li>
    <li><div class="divider"></div></li>

    <li class="side-nav-inline">
        <a href="{{ url('/dashboard') }}" class="inline waves-effect tooltipped{!! \Request::is('dashboard') ? ' active' : '' !!}" data-tooltip="@lang('dashboard.dashboard')"><i class="material-icons">&#xE871;</i></a>
        <a href="#" class="inline waves-effect tooltipped" data-tooltip="@lang('dashboard.account-summary')"><i class="material-icons">&#xE8A6;</i></a>
        <a href="{{ url('logout') }}" class="inline waves-effect tooltipped" data-tooltip="@lang('navigation.logout')" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="material-icons">&#xE879;</i>
        </a>
    </li>
    <li><div class="divider"></div></li>

    <li><a href="{{ url('dashboard/billing') }}" class="waves-effect{!! \Request::is('dashboard/billing') ? ' active' : '' !!}"><i class="material-icons">&#xE84F;</i> @lang('dashboard.billing')</a></li>
    <li><a href="{{ url('dashboard/organization') }}" class="waves-effect{!! \Request::is('dashboard/organization') ? ' active' : '' !!}"><i class="material-icons">&#xE0AF;</i> @lang('dashboard.organization')</a></li>
    <li><a href="{{ url('dashboard/user-management') }}" class="waves-effect{!! \Request::is('dashboard/user-management') ? ' active' : '' !!}"><i class="material-icons">&#xE8D3;</i> @lang('dashboard.user-management')</a></li>
</ul>