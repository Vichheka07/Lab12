@extends('layouts.main')
@section('title','Contact App | Login')
@section('content')
<div class="col-md-4 m-auto mt-5">
            <div class="shadow-sm">
                <h1 class="border-bottom p-4">Login</h1>

                <div class="px-4 pt-4">

                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" />
                            @error('email')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" />
                            @error('password')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                        </div>
                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label text-black-50" for="customCheck1">Remember me</label>
                            </div>
                            <a href="request-reset-password.html">Forget your password?</a>
                        </div>
                        <div class="mt-4 d-grid">
                            <button type="submit" class="btn btn-block btn-primary">Login</button>
                            <div class="text-center py-4 text-muted">
                                Don't have account?
                                <a href="register.html"
                                    class="text-muted font-weight-bold text-decoration-none">Register</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection