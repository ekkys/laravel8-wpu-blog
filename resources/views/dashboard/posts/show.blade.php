
@extends('dashboard.layout.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-md-8">
            <h2 class = "mb-3">{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success mb-3"> <span data-feather="arrow-left"></span>Back to All my posts</a>
            <a href="" class="btn btn-warning mb-3"> <span data-feather="edit-3"></span>Edit</a>
            <a href="" class="btn btn-danger mb-3"> <span data-feather="x-square"></span>Delete</a>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name}}" class="card-img-top" alt="{{ $post->category->name}}" class="img-fluid">
             <article class="my-3 fs6">
                 {!! $post->body !!}
             </article>
            <a href="/posts">Back to Posts</a>
        </div>
    </div>
</div>

@endsection
