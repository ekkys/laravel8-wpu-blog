@extends('layout.main')
@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <form action="/register" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center">Register Form</h1>

                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" value="{{ old('name')}}" placeholder="name">
                    <label for="name">Nama</label>
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ old('username')}}" placeholder="username">
                    <label for="username">Username</label>
                    @error('username')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email')}}" placeholder="email@example.com">
                    <label for="email">Email address</label>
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom @error('name') is-invalid @enderror" id="password"  placeholder="Password">
                    <label for="password">Password</label>
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
             <small class="d-block text-center mt-3">Already have account? <a href="/login">Login here</a></small>
          </form>
        </main>
    </div>
</div>
@endsection
