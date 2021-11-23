@extends('layout.main')

@section('container')
 <div class="container mt-4">
    <h1> About Me</h1>

    <h4>{{ $name }}</h4>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">

 </div>
@endsection()
