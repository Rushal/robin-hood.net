@extends('layouts.primary-layout')

<!-- Main Content -->
@section('content')
    <div class="container">
        <h1 class="page-title">Forgot your password?</h1>
        <p class="page-sub-title">Put in your email and we'll send instructions on how to reset it.</p>

        <hr class="page-hr"/>

        <div class="row">
            <div class="login col m6 offset-m3">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form role="form" method="POST" action="{{ url('/password/email') }}">
                    {{ csrf_field() }}

                    <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus>
                        <label for="email" data-error="Please enter a valid email address">E-Mail Address</label>
                    </div>

                    <div class="col s12">
                        <button type="submit" class="btn waves-effect">Send Password Reset Link</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
