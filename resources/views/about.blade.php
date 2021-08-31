@extends('layouts.main')

@section('container')
  <h1 class="mb-5">Halaman About</h1>
  <h3>{{ $name }}</h3>
  <p>{{ $email }}</p>
  <img src="img/{{ $image }}" alt="rzk" width="200" class="img-thumbnail rounded-circle">
@endsection


