@extends('layout.main')

@section('title', 'Kewlgame - verify email')

@section('content')
<h1>
    Verify email
</h1>
@if (session('resent'))
<div class="alert alert--success" role="alert">
    {{ __('A fresh verification link has been sent to your email address.') }}
</div>
@endif
<p>
    {{ __('Before proceeding, please check your email for a verification link.') }}
    {{ __('If you did not receive the email') }},
</p>

<form class="form" method="POST" action="{{ route('verification.resend') }}">
    @csrf
    <button type="submit" class="form__button">
        {{ __('click here to request another') }}.
    </button>
</form>

@endsection