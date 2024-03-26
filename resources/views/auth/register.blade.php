@extends('layout.main')

@section('title', 'Kewlgame - register')

@section('content')
<h1>
    Register
</h1>
<form class="form" method="POST" action="{{ route('register') }}">
    @csrf
    @include('components.input-with-label.name')
    @include('components.input-with-label.email')
    @include('components.input-with-label.password')
    @include('components.input-with-label.password-confirm')
    <button type="submit" class="form__button">
        {{ __('Register') }}
    </button>

</form>
@endsection