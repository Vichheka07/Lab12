@extends('layouts.main')
    @section('content')
        <main class="py-5">
        <div class="container">
            <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header card-title">
                    <strong>Contact Details</strong>
                </div>           
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="mb-2 row">
                        <label for="first_name" class="col-md-3 col-form-label">First Name</label>
                        <div class="col-md-9">
                            <p class="form-control-plaintext text-muted">{{$contactes->first_name}}</p>
                        </div>
                        </div>

                        <div class="mb-2 row">
                        <label for="last_name" class="col-md-3 col-form-label">Last Name</label>
                        <div class="col-md-9">
                            <p class="form-control-plaintext text-muted">{{$contactes->last_name}}</p>
                        </div>
                        </div>

                        <div class="mb-2 row">
                        <label for="email" class="col-md-3 col-form-label">Email</label>
                        <div class="col-md-9">
                            <p class="form-control-plaintext text-muted">{{$contactes->email}}</p>
                        </div>
                        </div>

                        <div class="mb-2 row">
                        <label for="phone" class="col-md-3 col-form-label">Phone</label>
                        <div class="col-md-9">
                            <p class="form-control-plaintext text-muted">{{$contactes->phone}}</p>
                        </div>
                        </div>

                        <div class="mb-2 row">
                        <label for="name" class="col-md-3 col-form-label">Address</label>
                        <div class="col-md-9">
                            <p class="form-control-plaintext text-muted">{{$contactes->address}}</p>
                        </div>
                        </div>
                        <div class="mb-2 row">
                        <label for="company_id" class="col-md-3 col-form-label">Company</label>
                        <div class="col-md-9">
                            <p class="form-control-plaintext text-muted">{{$contactes->company->name}}</p>
                        </div>
                        </div>
                        <hr>
                        <div class="mb-2 row">
                        <div class="col-md-9 offset-md-3">
                            <a href="{{ route('vichheka.edit', $contactes->id) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('vichheka.destroy', $contactes->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" style="display: inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-circle btn-outline-danger" title="Delete">Delete
                            </button>
                            <a href="{{ route('vichheka.contacts.index') }}" class="btn btn-outline-secondary">Cancel</a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </main>
    @endsection