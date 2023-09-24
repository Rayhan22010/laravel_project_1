@extends('frontend.layout.master')

@section('page-css')
@endsection

@section('content')
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleRide" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach ($hValue as $data)
                <div class="carousel-item active">
                    <img src="{{ asset('upload/studentImage/' . $data->H_image) }}" class="crousel_image d-block w-100"
                        alt="">
                    <div class="over_layer"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="carousel-heading pb-3">{{ $data->Carousel_heading }}</h5>
                        <a href="#" class="main_btn">{{ $data->btn_name }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="site-section my-5 pb-4">
        <div class="container">
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-4 mb-5">
                    <h2 class="section-title-underline mb-5">
                        <span>Why Academics Works</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                @foreach ($aValue as $data)
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="feature-1 border">
                            <div class="icon-wrapper bg-primary">
                                <span class="flaticon-mortarboard text-white">
                                    {{-- <i class="fa-solid fa-house"></i>
                                    {!! $data->icone !!} --}}
                                    <img src="{{ asset('upload/studentImage/' . $data->image) }}"
                                        style="width: 40px; height:40px;" alt="">
                                </span>
                            </div>
                            <div class="feature-1-content">
                                <h2>{{ $data->heading }}</h2>
                                <p class="text-black">{{ $data->description }}</p>
                                <p><a href="#" class="btn btn-primary px-4 rounded-2">{{ $data->btn_learn }}</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-6 mb-5">
                    <h2 class="section-title-underline mb-3">
                        <span>Popular Courses</span>
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, id?</p>
                </div>
                <div class="owl-carousel owl-theme owl-loaded">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            @foreach ($value as $data)
                                <div class="owl-item">
                                    <div class="test-text">
                                        <div class="card feature-card">
                                            <img src="{{ asset('upload/studentImage/' . $data->C_image) }}"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <p class="card-title pt-0 pb-0"><a href="#">{{ $data->C_title }}</a>
                                                </p>
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
                                                <a href="{{ route('enroll.page') }}" class="btn-primary btn">Enroll in
                                                    this course</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-university" id="about-university">
        <div class="container">
            <div class="row">
                @foreach ($uValue as $data)
                    <div class="col-lg-5 col-12">
                        <h2 class="about-heading text-light">{{ $data->heading }}</h2>
                    </div>
                    <div class="col-lg-7 col-12">
                        <p class="text-light about-description">{{ $data->description }}</p>
                        <button class="btn-primary btn">{{ $data->btn_learn }}</button>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="testimonial" id="testimonial">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-4">
                    <h2 class="section-title-underline pb-5">
                        <span>Testimonials</span>
                    </h2>
                </div>
            </div>
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        @foreach ($tValue as $data)
                            <div class="owl-item">
                                <div class="test-text">
                                    <div class="card testimonial-card">
                                        <div class="image-name-title d-flex">
                                            <img src="{{ asset('upload/studentImage/' . $data->clintPicture) }}"
                                                class="card-img-top" alt="...">
                                            {{--                                    <img src="{{asset('frontend/image/person_1.jpg')}}" class="card-img-top" alt="..."> --}}
                                            <div class="card-body">
                                                <h6 class="card-text pt-0 pb-0">{{ $data->clintName }}</h6>
                                                <p class="card-title pt-0 pb-0"><a
                                                        href="#">{{ $data->workField }}</a></p>
                                            </div>
                                        </div>
                                        <div class="card-body card-footer-price">
                                            <p class="text-black">{{ $data->clintReview }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service" id="service">
        <div class="container">
            <div class="row">
                @foreach ($kValue as $data)
                    <div class="col-lg-4 col-12">
                        <div class="service-icone">
                            <img src="{{ asset('upload/studentImage/' . $data->image) }}"
                                style="width: 50px; height:50px;" alt="">
                            {{-- <i class="fa-solid fa-graduation-cap"></i> --}}
                        </div>
                        <h3 class="">{{ $data->heading }}</h3>
                        <p class="">{{ $data->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="subscribe">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h2 class="text-light">Subscribe to us!</h2>
                    <p class="text-light">Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia,</p>
                </div>
                <div class="col-lg-5">
                    <form action="" class="d-flex">
                        <input type="text" class="rounded form-control mr-2 py-3" placeholder="Enter your email">
                        <button class="btn btn-primary rounded py-3 px-4" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="fa-solid fa-arrow-up"></i></a>
@endsection

@section('page-jss')
@endsection
