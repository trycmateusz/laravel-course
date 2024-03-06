@vite('')

@extends('layout.main')

@section('title', 'Uzytkownicy')

@section('content')
<ul>
    @foreach ($users as $user)

    @endforeach
</ul>
123
@endsection