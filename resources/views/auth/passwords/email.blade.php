@extends('layouts.primary-layout')

<!-- Main Content -->
@section('content')
    <div class="container">
        <div class="row">
            <div class="col m6 offset-m3">
                <div class="card">
                    <div class="card-content">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <span class="card-title">Forgot your password?</span>

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
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
