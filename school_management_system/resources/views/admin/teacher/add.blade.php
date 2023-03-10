@extends('master.admin.master')
@section('title')
    Add Teacher
@endsection

@section('content')
    <main class="page-content">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-center">
                            <h3 class="mb-0 text-center">Add Teacher Form</h3>
                            <p class="text-center text-success">{{Session::get('massage')}}</p>
                        </div>
                        <form action="{{route('new-teacher')}}"  method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="border p-4 rounded">
                                <div class="row mb-3">
                                    <label for="horizontal-name-input" class="col-sm-3 col-form-label">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" id="horizontal-name-input"  placeholder="Enter Your Name......">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email" id="horizontal-email-input"  placeholder="Enter Your Email....">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="horizontal-mobile-input" class="col-sm-3 col-form-label">Mobile</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="mobile" id="horizontal-mobile-input"  placeholder="Enter Your Mobile Number....">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="horizontal-address-input" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <textarea  class="form-control" name="address" id="horizontal-address-input" placeholder="Enter Your Address...."></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label  class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control-file" name="image" accept="image/*" placeholder="Enter Your Image....">
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary px-5" >Create New Teacher</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection

