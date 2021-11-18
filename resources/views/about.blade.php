@extends('layout.main')

@section('container')
 <div class="container mt-4">
    <h1> About Me</h1>

    <p>{{ $name }}</p>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200">

 </div>
@endsection()
