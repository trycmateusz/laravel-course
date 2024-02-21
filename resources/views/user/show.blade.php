@extends('layout.main')

@section('title', 'Uzytkownik ' . $user['id'])

@section('content')
<hr />
<div>
    elegancki uzytkownik: {{ $user['name'] }}
</div>
<div>
    Wiek: {{ $user['age'] }}
    @if ($user['age'] >= 18)
    <span>
        Osoba dorosła aaaaa
    </span>
    @else
    <span>
        Nastoletni ziomek
    </span>

    @endif
</div>
@endsection