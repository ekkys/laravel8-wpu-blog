
@extends('layout.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class = "mb-3">{{ $post->title }}</h2>
            <p>By.  <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}"  class="text-decoration-none">{{ $post->category->name }} </a></p>
            @if ($post->image)
                <img src={{ asset('storage/'.$post->image) }} class="img-fluid">
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name}}" style="background-color: rgba(0,0,0,0.7)" class="card-img-top" alt="{{ $post->category->name}}" class="img-fluid">
            @endif
             <article class="my-3 fs6">
                 {!! $post->body !!}
             </article>
            <a href="/posts">Back to Posts</a>
        </div>
    </div>
</div>
@endsection
