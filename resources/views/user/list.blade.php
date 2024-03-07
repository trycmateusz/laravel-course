@vite('')

@extends('layout.main')

@section('title', 'Uzytkownicy')

@section('content')
<h1>
    Users
</h1>
<ul class="user-list">
    @foreach ($users as $user)
    <li class="user-list-item">
        <a class="user-list-item__link" href="{{ route('get.user.details', $user['id']) }}">
            User:
            <span>
                {{ $user['name'] }}
            </span>
        </a>
    </li>
    @endforeach
</ul>
@endsection