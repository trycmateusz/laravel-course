@extends('layout.main')

@section('title', 'Kewlgame - login')

@section('content')
<h1>
    Login
</h1>
<form class="form" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form__input-wrapper">
        <label for="email" class="form__label">
            {{ __('Email Address') }}
        </label>
        <input id="email" type="email" class="form__input @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
        <span class="form__error" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="form__input-wrapper">
        <label for="password" class="form__label">
            {{ __('Password') }}
        </label>
        <input id="password" type="password" class="form__input @error('password') is-invalid @enderror" name="password"
            required autocomplete="off" autofocus>
        @error('password')
        <span class="form__error" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="login__controls">
        <button type="submit" class="form__button">
            {{ __('Login') }}
        </button>
        @if (Route::has('password.request'))
        <a class="link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
        @endif
    </div>
</form>
@endsection