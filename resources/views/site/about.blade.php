@extends('layouts.app')
@section('content')
    <section class="page-title page-title-1" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
            <div class="bg-section"><img src="{{ asset('storage/'.$aboutPage->title_bg_image) }}" alt="{{ $aboutPage->name }}_backround_image" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">{{ $aboutPage->name }}</h1>
                            <p class="title-desc">{{ $aboutPage->title_description }}</p>
                            {{-- <div class="title-action"> <a class="btn btn--primary" href="page-services.html">
                                    <span>our services</span><i class="energia-arrow-right"></i></a><a
                                    class="btn-video btn-video-2 popup-video"
                                    href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i class="fas fa-play"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>

            </div>
        </div>

    </section>


    <section class="about about-1" id="about-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="about-img">
                        <div class="about-img-holder bg-overlay">
                            <div class="bg-section"><img src="{{ asset('storage/'.$aboutPage->featured_image) }}" alt="{{ $aboutPage->name }}" />
                            </div>
                        </div>
                        {{-- <div>

                            <div class="counter">
                                <div class="counter-icon"> <i class="flaticon-033-plug"></i></div>
                                <div class="counter-num"> <span class="counting" data-counterup-nums="954">954</span>
                                    <p></p>
                                </div>
                                <div class="counter-name">
                                    <h6>happy clients</h6>
                                </div>
                            </div>

                        </div> --}}
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    {{-- <div class="heading heading-1">
                        <p class="heading-subtitle heading-subtitle-bg">Complete Commercial And Residential Solar
                            Systems</p>
                        <h2 class="heading-title">We Are Pioneers In The World Of Solar & Renewable Energy!</h2>
                    </div> --}}
                    <div class="about-block">
                        <div class="row">

                            <div class="col-12 col-lg-12">
                                <div class="block-left">
                                    {!! $aboutPage->description !!}
                                </div>
                            </div>

                            {{-- <div class="col-12 col-lg-5">
                                <div class="block-right">
                                    <div class="prief-set">
                                        <p>How can we meet the growing demand for electricity while protecting our
                                            climate & make planet a better place?</p>
                                        <ul class="list-unstyled advantages-list">
                                            <li>Reliability and performance</li>
                                            <li>Just-in-time manufacturing</li>
                                            <li>solar material financing</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

   @endsection
