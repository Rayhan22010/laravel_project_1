@extends('frontend.layout.master')

@section('page-css')
@endsection

@section('content')
    <section class="admission">
        <div class="container">
            <div class="admission-heading">
                <h1 class="text-light">Courses</h1>
                <p class="text-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus, voluptatem?
                </p>
            </div>
        </div>
    </section>

    <section class="path pt-3 pb-3">
        <div class="container">
            <ul type="none" class="path-ul d-flex gap-4">
                <li class="home-p">Home</li>
                <li><i class="fa-solid fa-chevron-right"></i></li>
                <li class="admission-p">Courses</li>
            </ul>
        </div>
    </section>

    <section class="course-body">
        <div class="container">
            <div class="row">
                @foreach ($value as $data)
                    <div class="col-lg-4 col-12 pt-3">
                        <div class="card feature-card">
                            <img src="{{ asset('upload/studentImage/' . $data->C_image) }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <p class="card-title pt-0 pb-0"><a href="#">{{ $data->C_title }}</p>
                                <h6 class="card-text pt-0 pb-0">{{ $data->C_subtitle }}</h6>
                                <ul class="d-flex star-icon">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="card-body card-footer-price">
                                <h4>{{ $data->C_price }}</h4>
                                <a href="{{ route('enroll.page') }}" class="btn-primary btn">Enroll in this course</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="service" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="service-icone">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <h3 class="">Our philospy</h3>
                    <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam dicta unde
                        laudantium
                        quaerat cupiditate accusantium vel modi magni eaque repellat!</p>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="service-icone">
                        <i class="fa-solid fa-laptop"></i>
                    </div>
                    <h3 class="">Academics Principle</h3>
                    <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam dicta unde
                        laudantium
                        quaerat
                        cupiditate accusantium vel modi magni eaque repellat!</p>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="service-icone">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <h3 class="">Key of success</h3>
                    <p class="">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam dicta unde
                        laudantium
                        quaerat
                        cupiditate accusantium vel modi magni eaque repellat!</p>
                </div>
            </div>
        </div>
    </section>
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="fa-solid fa-arrow-up"></i></a>
@endsection
