@extends('layout.main')

@section('title', 'Uzytkownik ' . $user['id'])

@section('content')
<h1>
    User: {{ $user['name'] }}
</h1>
@endsection