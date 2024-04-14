@extends('layout.main')

@section('title', 'Kewlgame - edit profile')

@section('content')
    <h1>
        Editing your profile
    </h1>
    <form class="form" action="{{ route('me.update') }}">
        @csrf
        @include('components.input-with-label.name', [
            'value' => old('name') ?? $user->name,
        ])
        @include('components.input-with-label.email', [
            'value' => old('email') ?? $user->email,
        ])
        @include('components.input-with-label.base', [
            'errorName' => 'phone',
            'label' => __('Phone number'),
            'name' => 'phone',
            'type' => 'text',
            'value' => old('phone') ?? $user->phone,
        ])
        <div class="flex-row">
            <button type="submit" class="form__button">
                Save
            </button>
            <a href="{{ route('me.profile') }}" class="form__button secondary">
                Discard
            </a>
        </div>
    </form>
@endsection
