@extends('layout.main')

@section('title', 'Kewlgame - reset password')

@section('content')
<h1>
    Reset password
</h1>
<form class="form" method="POST" action="{{ route('password.update') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">

    @include('components.input-with-label.email', [
    'errorMessage' => isset($message) ? $message : ''
    ])
    @include('components.input-with-label.password', [
    'errorMessage' => isset($message) ? $message : ''
    ])
    @include('components.input-with-label.password-confirm', [
    'errorMessage' => isset($message) ? $message : ''
    ])

    <button type="submit" class="form__button">
        {{ __('Reset Password') }}
    </button>
</form>
@endsection