@extends('layouts.main')

@section('content')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="{{ asset('img/nizam.jpeg') }}" alt="" width="150">
@endsection
