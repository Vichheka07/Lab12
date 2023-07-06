@extends('layouts.main')
@section('title','Contact App | Register')
@section('content')

<div class="col-md-4 m-auto mt-5">
        <div class="shadow-sm">
            <h1 class="border-bottom p-4">Register</h1>
            <div class="px-4 pt-4">
                <form accept="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label @error('name') is-invalid @enderror" >Name</label>
                        @error('name')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                        <input type="text" class="form-control" value="{{old('name')}}" name="name" />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label @error('email') is-invalid @enderror">Email</label>
                        @error('email')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                        <input type="email" class="form-control" value="{{old('email')}}" name="email" />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label @error('password') is-invalid @enderror">Password</label>
                        @error('password')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                        <input type="password" class="form-control" name="password" />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label @error('password') is-invalid @enderror">Password Confirmation</label>
                        @error('password')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                        <input type="password" class="form-control" name="password_confirmation" />
                    </div>
                    <div class="mt-4 d-grid">
                        <button type="submit" class="btn btn-block btn-primary">Register</button>
                        <div class="text-center py-4 text-muted">
                            Already have account?
                            <a href="login.html" class="text-muted font-weight-bold text-decoration-none">Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection