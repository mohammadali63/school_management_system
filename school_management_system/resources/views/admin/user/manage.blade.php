@extends('master.admin.master')

@section('content')
    <div class="wrapper">
        <main class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 text-center">Manage User Form</h5>
                        <form class="ms-auto position-relative">
                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                            <input class="form-control ps-5" type="text" placeholder="search">
                        </form>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table align-middle table-bordered table-hover mb-0">
                            <thead class="table-secondary">
                            <tr>
                                <th>#</th>
                                <th>FullName</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="#" class="btn btn-warning " >
                                            <i class="bi bi-eye-fill"></i></a>
                                        <a href="{{route('edit-user',['id'=>$user->id])}}" class="btn btn-warning " >
                                            <i class="bi bi-pencil-fill"></i></a>
                                        <a href="{{route('delete-user',['id'=>$user->id])}}" class="btn btn-danger {{$user->id == 1 ? 'disabled' : ''}}" >
                                            <i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
