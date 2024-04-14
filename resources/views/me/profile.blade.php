@extends('layout.main')

@section('title', 'Kewlgame - my profile')

@section('content')
    <h1>
        Your profile
    </h1>
    <img class="me__avatar" src="/avatar.svg" alt="">
    <ul class="me__list">
        <li>
            <span class="me__list-element--highlight">Name: </span>{{ $user->name }}
        </li>
        <li>
            <span class="me__list-element--highlight">Email: </span>{{ $user->email }}
        </li>
        <li>
            <span class="me__list-element--highlight">Phone number: </span>{{ $user->phone ?? 'unspecified' }}
        </li>
    </ul>
    <a class="me-profile__link link" href="{{ route('me.edit') }}">
        Edit your profile
    </a>
@endsection
