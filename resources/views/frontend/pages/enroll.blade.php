@extends('frontend.layout.master')
@section('page-css')
@endsection

@section('content')
    <div class="enroll_course">
        <div class="container">
            <div class="text-center position-relative" style="padding-top: 4rem">
                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

            </div>
            <form action="{{ route('entroll.store') }}" method="post" enctype="multipart/form-data" class="enroll-form">
                @csrf
                <h5 class="text-center pb-4">To Enroll the course, please provide the following information.</h5>
                <div class="row">
                    <div class="col-6">
                        <label for="validationDefault01" class="form-label">User name</label>
                        <input type="text" class="form-control" id="username" name="username" value=""
                            placeholder="Enter User name" required>
                    </div>
                    <div class="col-6">
                        <label for="validationDefaultUsername" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text" id="inputGroupPrepend2">@</span>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter the email" aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                    <div class="col-6 pt-4">
                        <label for="validationDefault03" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="col-6 pt-4">
                        <label for="validationDefault05" class="form-label">Course Name</label>
                        <input type="text" class="form-control" id="coursename" name="coursename" required>
                    </div>
                    <div class="col-12 pt-2">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="fa-solid fa-arrow-up"></i></a>
@endsection

@section('page-jss')
@endsection
