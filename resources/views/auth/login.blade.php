<head>
    <link rel="stylesheet" href="./css/login.css">
</head>
@extends('layouts.app-master')

@section('content')
<div class="containerRegister">
    <div class="login-box">
        <h2>Login</h2>
        <form class="reg-form" method="post" action="{{ route('login.perform') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        @include('layouts.partials.auth.messages')
            <div class="user-box">
                <input type="text" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>>
                <label>Username</label>
                @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
            </div>
            <div class="user-box">
                <input type="password" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                <label>Password</label>
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <input type="submit" value="login" name="login">
            @include('auth.partials.copy')
            </input>
        </form>
    </div>
</div>
@endsection