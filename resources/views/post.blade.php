
@extends('layout.main')

@section('container')
    <article>
        <h2 class = "mb-5">{{ $post->title }}</h2>
        <p>By.  <a href="{{ $post->user->name }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
    <a href="/posts">Back to Posts</a>
@endsection
