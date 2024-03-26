@extends('layout.main')

@section('title', 'Kewlgame - login')

@section('content')
<h1>
    Login
</h1>
<form class="form" method="POST" action="{{ route('login') }}">
    @csrf
    @include('components.input-with-label.email')
    @include('components.input-with-label.password')

    <div class="flex-col">
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