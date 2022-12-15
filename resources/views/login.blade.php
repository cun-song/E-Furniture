@extends('partial.index')
@section('container')
    <div class="contain d-flex">
        <div class="w-50 h-100 position-relative">
            <img src="{{Storage::Url('image/login.png')}}" class="w-100 h-100" alt="">
            <div class="layer position-absolute bg-dark w-100 h-100"></div>
        </div>
        <div class="signup w-50 h-100 p-5 d-flex flex-column align-items-center">
            <div class="w-75 mt-5">
                <h2>Login</h2>
                <form action="/login" method="post" class="form-signup mt-5">
                    @csrf
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required autofocus value="{{Cookie::get('email') != null ? Cookie::get('email') : old('email')}}">
                        @error('email')
                            <div class="invalid-feedback">
                                <p>{{$message}}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="password" required value="{{Cookie::get('email') != null ? Cookie::get('password') : ""}}">
                        @error('password')
                            <div class="invalid-feedback">
                                <p>{{$message}}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 form-check d-flex align-items-center">
                            <input type="checkbox" class="form-check-input me-2" id="remember_me" name="remember_me" checked>
                            <label class="form-check-label" for="remember_me" style="font-size: 16px" >Remember me</label>
                    </div>
                    <small>Don't have an account? <a href="/register">Sign up</a></small>
                    <div class="d-flex justify-content-center mb-5">
                        <button class="btn btn-secondary" type="submit">GET STARTED</button>
                    </div>
                </form>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}<strong>Please Login! </strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
             @endif
             @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{session('loginError')}} </strong> Incorrect email or password.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
             @endif
            </div>
        </div>
    </div>
@endsection
