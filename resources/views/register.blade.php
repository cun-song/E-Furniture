@extends('partial.index')
@section('container')
    <div class="contain d-flex">
        <div class="w-50 h-100 position-relative">
            <img src="{{Storage::Url('image/register.png')}}" class="w-100 h-100" alt="">
            <div class="layer position-absolute bg-dark w-100 h-100"></div>
        </div>
        <div class="signup w-50 h-100 p-5 d-flex flex-column align-items-center">
            <div class="w-75">
                <h2>Sign up</h2>
                <h3>Create an account</h3>
                <form action="/register" method="post" class="form-signup mt-5">
                    @csrf
                    <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" required value="{{old('username')}}">
                        @error('username')
                            <div class="invalid-feedback">
                                <p>{{$message}}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" required value="{{old('email')}}">
                        @error('email')
                            <div class="invalid-feedback">
                                <p>{{$message}}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required >
                        @error('password')
                            <div class="invalid-feedback">
                                <p>{{$message}}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-secondary" type="submit">GET STARTED</button>
                    </div>
                </form>
            </div>
            <small>Already have an account? <a href="/login">Sign in</a></small>

        </div>
    </div>
@endsection
