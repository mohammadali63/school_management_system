@extends('master.front.master')

@section('title')
    Course Detail
@endsection
@section('body')
    <section class="py-5">
        <div class="cotainer">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body rounded-0">
                        <img src="{{asset('/')}}img/person-1.jpg" alt="" class="w-100"/>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-body rounded-0">
                        <h1>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
                        <p>Course Free :- 20,000 ৳</p>
                        <hr/>
                        <h2>Trainer Name</h2>
                        <ul>
                            <li><a href="">Trainer Facebook Link</a></li>
                            <li><a href="">Trainer Twiter Link</a></li>
                            <li><a href="">Trainer Linkedin Link</a></li>
                        </ul>
                        <hr/>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
