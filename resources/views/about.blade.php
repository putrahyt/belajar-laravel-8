@extends('layouts.main')

@section('container')    
    <h3>Halaman About</h3>
    <h5>{{ $nama }}</h5>
    <p>{{ $email }}</p>
    <img src="{{ asset('img/' . $image) }}" alt="{{ $nama }}" width="100" class="img-thumbnail">
@endsection
