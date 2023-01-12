@extends('master.admin.master')

@section('content')
    <div class="wrapper">
        <main class="page-content">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 text-center">Manage Teacher Form</h5>
                        <p class="text-center text-success">{{Session::get('massage')}}</p>
                        <form class="ms-auto position-relative">
                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                            <input class="form-control ps-5" type="text" placeholder="search">
                        </form>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table align-middle table-bordered table-hover mb-0">
                            <thead class="table-secondary">
                            <tr>
                                <th>SL</th>
                                <th>FullName</th>
                                <th>Code</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$teacher->name}}</td>
                                    <td>{{$teacher->code}}</td>
                                    <td>{{$teacher->email}}</td>
                                    <td>{{$teacher->mobile}}</td>
                                    <td>{{$teacher->address}}</td>
                                    <td>
                                        <img src="{{asset($teacher->image)}}" alt="" height="50" width="50" />
                                    </td>
                                    <td>{{$teacher->status == 1 ? 'Active' : 'InActive'}}</td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                            <a href="#" class="btn btn-warning " >
                                                <i class="bi bi-eye-fill"></i></a>
                                            <a href="#" class="btn btn-warning " >
                                                <i class="bi bi-eye-slash"></i></a>
                                            <a href="{{route('edit-teacher',['id'=>$teacher->id])}}" class="btn btn-warning " >
                                                <i class="bi bi-pencil-fill"></i></a>
                                            <a href="{{route('delete-teacher',['id'=>$teacher->id])}}" class="btn btn-danger" >
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

