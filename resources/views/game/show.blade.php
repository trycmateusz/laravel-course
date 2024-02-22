@extends('layout.main')

@section('title', 'gra' . $id)

@section('content')
<h1>
    gra {{ $id }}
</h1>
<p>
    {{ $game['name'] }}
</p>
<p>
    {{ $game['year'] }}
</p>
@endsection