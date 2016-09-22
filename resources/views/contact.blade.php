@extends('layouts.primary-layout')

@section('content')
    <div class="container">
        <h1 class="page-title">CONTACT US</h1>
        <p class="page-sub-title">You can contact us using the information listed here.</p>

        <hr class="page-hr"/>

        <div class="row">
            <!--<div class="col s12 m8 offset-m2">
                <h1 class="page-title">CONTACT US</h1>
                <p class="page-sub-title">You can contact us using the information listed here.</p>

                <hr class="page-hr"/>
            </div>-->

            <div class="login col s12 m6 offset-m3">

                <form role="form" method="POST" action="{{ url('/login') }}" class="col s12">
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

                    <div class="input-field col s12{{ $errors->has('message') ? ' has-error' : '' }}">
                        <textarea id="message" type="email" class="materialize-textarea validate" name="message" required>{{ old('message') }}</textarea>
                        <label for="message">@lang('navigation.message')</label>

                        @if ($errors->has('message'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('message') }}</strong>
                                </span>
                        @endif
                    </div>


                    <div class="col s12 center">
                        <button type="submit" class="btn waves-effect">Contact Us</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection