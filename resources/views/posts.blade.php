
@extends('layout.main')

@section('container')

<h1 class="mb-5">{{ $title }}</h1>

@if ($posts->count())
    <div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name}}" class="card-img-top" alt="...">
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"  class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
            <small class="text-muted">
                <p> By.  <a href="/authors/{{ $posts[0]->author->username}}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans()}}</p>
            </small>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/posts/{{ $posts[0]->slug }}"  class="text-decoration-none btn btn-primary">Read more ..</a></h2>
        </div>
    </div>

@else
<p class="text-center fs-4">No Post Found.</p>
@endif

<article class="mb-5 border-bottom pb-3">

    @foreach ($posts->skip(1) as $post)
        <h2><a href="/posts/{{ $post->slug }}"  class="text-decoration-none mb-5">{{ $post->title }}</a></h2>

        <p> By.  <a href="/authors/{{ $post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <p>{!! $post->excerpt !!}</p>

        <a href="/posts/{{ $post->slug }}"  class="text-decoration-none">Read more ..</a></h2>
        <hr>
    @endforeach
</article>
@endsection
