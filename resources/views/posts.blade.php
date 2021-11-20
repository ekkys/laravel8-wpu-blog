
@extends('layout.main')

@section('container')
<article class="mb-5">
    @foreach ($posts as $post)
        <h2>
            <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a></h2>
        <h5>By : {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    @endforeach
</article>
@endsection
