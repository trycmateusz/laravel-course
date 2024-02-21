@extends('layout.main')

@section('title', 'Uzytkownicy')

@section('content')
<ul>
    @foreach ($users as $user)
    <div>
        {{ $user['id'] . ' - ' . $user['name'] }}
    </div>
    @endforeach
</ul>
@endsection