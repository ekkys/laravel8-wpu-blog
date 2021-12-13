
@extends('layout.main')

@section('container')

<h1>{{ $title }}</h1>
<article class="mb-5 border-bottom pb-3">

    @foreach ($posts as $post)
        <h2><a href="/posts/{{ $post->slug }}"  class="text-decoration-none mb-5">{{ $post->title }}</a></h2>

        <p> By.  <a href="/authors/{{ $post->author->name }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        <p>{!! $post->excerpt !!}</p>

        <a href="/posts/{{ $post->slug }}"  class="text-decoration-none">Read more ..</a></h2>
 <hr>
    @endforeach
</article>
@endsection
