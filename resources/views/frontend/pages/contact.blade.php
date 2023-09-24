@extends('frontend.layout.master')

@section('page-css')
@endsection

@section('content')
    <section class="admission">
        <div class="container">
            <div class="admission-heading">
                <h1 class="text-light">Contact</h1>
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
                <li class="admission-p">Contact</li>
            </ul>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data" class="row g-3">
                @csrf
                <div class="input-box">
                    <input class="form-control" type="text" name="name" id="name" placeholder="Full Name">
                    <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="input-box">
                    <input class="form-control" type="number" name="phone" id="phone" placeholder="Mobile">
                    <input class="form-control" type="text" name="subject" id="subject" placeholder="Email subject">
                </div>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"
                    placeholder="Your message"></textarea>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
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
                {{-- <div class="col-lg-4 col-12">
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
                </div> --}}
            </div>
        </div>
    </section>
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="fa-solid fa-arrow-up"></i></a>
@endsection
