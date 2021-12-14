
@extends('layout.main')

@section('container')

<h1 class="mb-5">{{ $title }}</h1>

@if ($posts->count())
    <div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name}}" class="card-img-top" alt="...">
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
<div class="container">
    <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"><div class="position-absolute px-3 py-2 text-white bg-dark">{{ $post->category->name }}</div></a>
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title}} </h5></small>
                        <p> By.  <a href="/authors/{{ $post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a><small> {{ $post->created_at->diffForHumans()}} </small></p>
                        <p class="card-text">{{ $post->excerpt }} </p>
                        <a href="/posts/{{ $post->slug }}"  class="text-decoration-none btn btn-primary">Read more ..</a></h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</article>
@endsection
