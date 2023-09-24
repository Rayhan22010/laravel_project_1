@extends('frontend.layout.master')

@section('page-css')
@endsection

@section('content')
    <section class="admission">
        <div class="container">
            <div class="admission-heading">
                <h1 class="text-light">Admissions</h1>
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
                <li class="admission-p">Admission</li>
            </ul>
        </div>
    </section>

    <section class="admission-body py-5">
        <div class="container">
            @foreach ($value as $data)
                <div class="row">
                    <div class="col-lg-6 col-12 college-req">
                        <img src="{{ asset('upload/admissionImage/' . $data->requiPicture) }}" alt="">
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="req-heading">
                            <h2 class="pb-2">{{ $data->requiHeading }}</h2>
                            <p class="pt-4">{{ $data->requiText }}</p>

                            <ul class="req-list">
                                <li><i class="fa-solid fa-check"></i> Accomplished Application Form</li>
                                <li><i class="fa-solid fa-check"></i> High School Report Card</li>
                                <li><i class="fa-solid fa-check"></i> High School Transcript</li>
                                <li><i class="fa-solid fa-check"></i> 2×2 picture</li>
                                <li><i class="fa-solid fa-check"></i> 1×1 picture</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="second-req">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="req-heading">
                                <h2 class="pb-2">{{ $data->transHeading }}</h2>
                                <p class="pt-4">{{ $data->transText }} <br> <br> Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit.
                                    Recusandae fugit optio, ipsa illum cum possimus nulla cupiditate tempore esse porro?</p>

                                <ul class="req-list">
                                    <li><i class="fa-solid fa-check"></i> Accomplished Application Form</li>
                                    <li><i class="fa-solid fa-check"></i> High School Report Card</li>
                                    <li><i class="fa-solid fa-check"></i> High School Transcript</li>
                                    <li><i class="fa-solid fa-check"></i> 2×2 picture</li>
                                    <li><i class="fa-solid fa-check"></i> 1×1 picture</li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-6 col-12 college-req">
                            <img src="{{ asset('upload/studentImage/' . $data->transPicture) }}" alt="">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="service" id="service">
        <div class="container">
            <div class="row">
                @foreach ($kValue as $data)
                    <div class="col-lg-4 col-12">
                        <div class="service-icone">
                            <img src="{{ asset('upload/studentImage/' . $data->image) }}" style="width: 50px; height:50px;"
                                alt="">
                        </div>
                        <h3 class="">{{ $data->heading }}</h3>
                        <p class="">{{ $data->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="fa-solid fa-arrow-up"></i></a>
@endsection
