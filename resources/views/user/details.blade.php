@extends('layout.main')

@section('title', 'Kewlgame - User ' . $user['id'])

@section('content')
<h1>
    User: {{ $user['name'] }}
</h1>
@endsection