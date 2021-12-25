
@extends('layout.main')

@section('container')

<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3" >
    <div class="col-md-6">
        <form action="/posts">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2" name="cari" value= {{ request('cari')}}>
            <button class="btn btn-dark" type="submit" id="button-addon2">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count())
    <div class="card mb-3">
    @if ($posts[0]->image)
        <div style="max-height:350px; overflow:hidden; width:auto;">
                <img src={{ asset('storage/'.$posts[0]->image) }} class="img-fluid">
        </div>
    @else
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name}}" class="card-img-top" alt="...">
    @endif

        <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"  class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
            <small class="text-muted">
                <p> By.  <a href="/posts?author={{ $posts[0]->author->username}}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans()}}</p>
            </small>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/posts/{{ $posts[0]->slug }}"  class="text-decoration-none btn btn-dark">Read more ..</a></h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none"><div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)">{{ $post->category->name }}</div></a>
                    @if ($post->image)
                    <img src={{ asset('storage/'.$post->image) }} class="img-fluid">
                    @else
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name}}" class="card-img-top" alt="...">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title}} </h5></small>
                        <p> By.  <a href="/posts?author={{ $post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a><small> {{ $post->created_at->diffForHumans()}} </small></p>
                        <p class="card-text">{{ $post->excerpt }} </p>
                        <a href="/posts/{{ $post->slug }}"  class="text-decoration-none btn btn-secondary">Read more ..</a></h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</article>
@else
<p class="text-center fs-4">No Post Found.</p>
@endif

<div class="d-flex justify-content-end">
{{ $posts->links() }}
</div>
@endsection
