@extends('layouts.main')
    @section('content')
        <main class="py-5">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-title m-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="m-0">All Contacts</h4>
                        <div class="m-0">
                        <a href="{{route('vichheka.contacts.create')}}" class="btn btn-success"><i class="bi bi-plus-square"></i> Add New</a>
                        </div>
                    </div>
                    </div>
                <div class="card-body">
                    @include('contacts._filter',['Vichheka' => 'Hello'])
                    @if ($message = session('message'))
                    <div class="alert alert-success">{{ $message }}</div>
                    @endif
                    </div>
                    <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Company</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($contacts as $key => $contact): ?>
                        <tr>
                            <td>{{$contact->id}}</th>
                            <td>{{$contact->first_name}}</td>
                            <td>{{$contact->last_name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->company->name}}</td>
                            <td width="150">
                            <a href="{{route('vichheka.contacts.show',$contact->id)}}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="bi bi-eye-fill"></i></a>
                            <a href="{{ route('vichheka.edit', $contact->id) }}" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <form action="{{ route('vichheka.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" style="display: inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-circle btn-outline-danger" title="Delete"><i class="bi bi-x-circle"></i>
                            </button>
                            </form>
                            </td>
                        </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table> 
                    {{ $contacts->withQueryString()->links()}}
                    </div>
                    <!-- <nav class="mt-4">
                        <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                        </ul>
                    </nav> -->
                </div>
                </div>
            </div>
            </div>
        </div>
        </main>
    @endsection

    @section('contentkh')
    <h1>Hekk</h1>
    @endsection