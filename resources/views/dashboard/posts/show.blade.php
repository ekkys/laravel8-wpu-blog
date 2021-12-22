
@extends('dashboard.layout.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-md-8">
            <h2 class = "mb-3">{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success mb-3"> <span data-feather="arrow-left"></span> Back to All my posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mb-3"> <span data-feather="edit-3"></span> Edit</a>

            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0 mb-3" onclick="return confirm('Are you sure?') "><span data-feather="x-circle" ></span> Delete</button>
            </form>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name}}" class="card-img-top" alt="{{ $post->category->name}}" class="img-fluid">
             <article class="my-3 fs6">
                 {!! $post->body !!}
             </article>
        </div>
    </div>
</div>

@endsection
