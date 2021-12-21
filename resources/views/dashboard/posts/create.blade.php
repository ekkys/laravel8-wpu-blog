@extends('dashboard.layout.main')


@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create new post</h1>
    </div>

    <div class="col-md-8">
        <form action="/dashboard/posts" method="post">
            @csrf
            <div class="mb-3">
            <label for="title" class="form-label">Title</label>
                 <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
                 <input type="text" class="form-control" id="slug" name="slug" disabled readonly>
            </div>

          <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
    <script>
        //ambil judul
        const title = document.querySelector('#title');
        // tempat hasil slug
        const slug = document.querySelector('#slug');

        //ketika terjadi perubahan di tittle
        title.addEventListener('change', function(){
            fetch('/dashboard/posts/checkSlug?title='+ title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)

        })


     
    </script>
@endsection
