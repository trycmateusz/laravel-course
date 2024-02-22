@extends('layout.main')

@section('title', 'Uzytkownicy')

@section('content')
<ul>
    @foreach ($users as $user)
    @include('user.listRow', [
    'userData' => $user
    ])
    @endforeach
</ul>
@endsection