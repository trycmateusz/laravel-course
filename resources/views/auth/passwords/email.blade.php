@extends('layout.main')

@section('title', 'Kewlgame - demand password reset')

@section('content')
@if (session('status'))
<div class="alert" role="alert">
    {{ session('status') }}
</div>
@endif
<h1>
    Reset Password
</h1>
<form class="form" method="POST" action="{{ route('password.email') }}">
    @csrf
    @include('components.input-with-label.email')

    <button type="submit" class="form__button">
        {{ __('Send Password Reset Link') }}
    </button>
</form>
@endsection