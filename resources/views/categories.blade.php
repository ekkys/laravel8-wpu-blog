
@extends('layout.main')

@section('container')

<h1>Post Categories </h1>

@foreach ($categories as $category )
    <ul>
        <li>
            <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
        </li>
    </ul>
@endforeach

@endsection
