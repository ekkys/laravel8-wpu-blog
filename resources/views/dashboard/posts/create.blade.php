@extends('dashboard.layout.main')


@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>

    <div class="col-md-8">
        <form action="/dashboard/posts" method="post" class="mb-5">
            @csrf
            <div class="mb-3">
            <label for="title" class="form-label">Title</label>
                 <input type="text" class=" form-control @error('title') is-invalid @enderror " id="title" name="title" value="{{ old('title') }}"  required autofocus>
                 @error('title')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                 @enderror
            </div>
            <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
                 <input type="text" class="form-control @error('slug') is-invalid @enderror " id="slug" name="slug" value="{{ old('slug') }}" required  readonly>
                @error('slug')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
            <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                    @if (old('category_id') == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
            <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" name="body" value="{{ old('body') }}"s>
                @error('body')
                 <p class="text-danger">{{ $message }}</p>
                @enderror
                <trix-editor input="body"></trix-editor>
            </div>

          <button type="submit" class="btn btn-primary">Create Post</button>
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

        //menonaktifkan  fungsi attachment trix
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })


    </script>
@endsection

