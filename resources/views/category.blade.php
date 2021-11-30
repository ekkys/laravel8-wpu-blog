
@extends('layout.main')

@section('container')

<h1>Post Category : {{ $category }} </h1>
<article class="mb-5">
    @foreach ($posts as $post)
        <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>{!! $post->excerpt !!}</p>
    @endforeach
</article>
@endsection
