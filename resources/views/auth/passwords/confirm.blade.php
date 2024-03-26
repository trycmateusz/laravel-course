@extends('layout.main')

@section('title', 'Kewlgame - confirm password')

@section('content')
<h1>
    Confirm Password
</h1>
<form class="form" method="POST" action="{{ route('password.confirm') }}">
    @csrf
    @include('components.input-with-label.password')

    <button type="submit" class="form__button">
        {{ __('Confirm Password') }}
    </button>
    @if (Route::has('password.request'))
    <a class="link" href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
    </a>
    @endif
</form>
@endsection