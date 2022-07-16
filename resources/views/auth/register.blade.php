<head>
    <link rel="stylesheet" href="./css/register.css">
</head>
@extends('layouts.app-master')

@section('content')
<div class="containerRegister">
    <div class="login-box">
        <h2>Register</h2>
        <form action="" class="reg-form" method="post">
        @csrf
            <div class="user-box">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                <label>Addresse Email</label>
                @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="user-box">
                <input type="text" name="username" value="{{ old('username', 'name') }}" placeholder="Username" required="required" autofocus>>
                <label>Username</label>
                @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
            </div>
            <div class="user-box">
                <input type="password" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                <label>Mot de passe</label>
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="user-box">
                <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                <label>Confirmation du mot de passe</label>
                @if ($errors->has('password_confirmation'))
                    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>
            <input type="submit" value="login" name="login">
            @include('auth.partials.copy')
            </input>
        </form>
    </div>
</div>
@endsection