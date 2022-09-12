@extends('layouts.app')
@section('content')
    <section class="page-title page-title-1" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
            <div class="bg-section"><img src="{{ asset('storage/'.$partnerPage->title_bg_image) }}" alt="{{ $partnerPage->name }}_backround_image" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">{{ $partnerPage->name }}</h1>
                            <p class="title-desc">{{ $partnerPage->title_description }}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Partners</li>
                </ol>

            </div>
        </div>

    </section>


    <section class="about about-1 Partners-pb0">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-12">

                    <div class="about-block">
                        <div class="row">

                            <div class="col-12 col-lg-12">
                                <div class="block-left">
                                    {!! $partnerPage->description !!}
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>



    <section class="about about-1 Partners-pt0">
        <div class="container">
            <div class="row">
                @foreach ($partners as $partner )
                <div class="col-6 col-lg-6">

                    <div class="heading heading-1 text-center">
                        <h2 class="heading-title">{{ $partner->title }}</h2>
                    </div>

                    <div class="about-block">
                        <div class="row">

                            <div class="col-12 col-lg-12">
                                <div class="block-left">
                                    {!! $partner->description !!}
                                </div>
                            </div>

                            <a href="{{ $partner->website }}" target="_blank">Visit partner's website <i class="energia-arrow-right"></i></a>

                        </div>
                    </div>
                </div>
                @endforeach


            </div>

        </div>

    </section>



   @endsection
