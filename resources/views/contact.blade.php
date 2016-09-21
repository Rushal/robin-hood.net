@extends('layouts.primary-layout')

@section('content')
    <div class="container">
        <h1 class="page-title">CONTACT US</h1>
        <p class="page-sub-title">You can contact us using the information listed here.</p>

        <hr class="page-hr"/>

        <div class="row">
            <div class="col s12">
                <p>Contact stuff here?</p>

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

                    <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus>
                        <label for="email">@lang('navigation.email.long')</label>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
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