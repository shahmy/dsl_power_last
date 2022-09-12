@extends('layouts.app')

@section('content')
<section class="page-title page-title-1" id="page-title">
    <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
        <div class="bg-section"><img src="{{ asset('site/assets/images/background/02.jpg') }}"
                alt="packages_backround_image" /></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="title">
                        <h1 class="title-heading">Packages</h1>
                        {{-- <p class="title-desc">{{ $partnerPage->title_description }}</p> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb d-flex">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Packages</li>
            </ol>

        </div>
    </div>

</section>


<section class="blog blog-grid blog-grid-5" id="blog">
    <div class="container">
        <div class="row">

            @foreach ($packages as $package )

            <div class="col-12 col-md-6 col-lg-3">

                <div class="blog-entry" data-hover="">
                    <div class="entry-content">

                        <div class="entry-title text-center">
                            <h4><a href="{{ route('single-package',[$package->id,$package->slug]) }}">{{ $package->name }}</a></h4>
                        </div>
                        <div class="entry-img-wrap">
                            <div class="entry-img"><a href="{{ route('single-package',[$package->id,$package->slug]) }}">
                                <img src="{{ asset('storage/'.$package->featured_image) }}" alt="{{ $package->name }}" /></a>
                            </div>

                        </div>


                        <div class="entry-more text-center"> <a class="btn btn--white btn-bordered"
                                href="{{ route('single-package',[$package->id,$package->slug]) }}"> Details <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


                    {{-- <div class="service-panel services-panel-3">
                        <div class="service-img"> <img src="{{ asset('storage/'.$package->featured_image) }}" alt="image" /></div>
                        <div class="service-content">
                            <h4><a href="{{ route('single-package',[$package->id,$package->slug]) }}">{{ $package->name }}</a></h4>
                            <a class="btn btn--secondary" href="{{ route('single-package',[$package->id,$package->slug]) }}">Contact Us<i
                                    class="energia-arrow-right"></i></a>
                        </div>
                    </div> --}}


            </div>

            @endforeach

        </div>

        {{-- <div class="row">
                    <div class="col-12 text--center">
                        <ul class="pagination">
                            <li><a class="current" href="blog-grid.html">1</a></li>
                            <li><a href="blog-grid.html">2</a></li>
                            <li><a href="#" aria-label="Next"><i class="energia-arrow-right"></i></a></li>
                        </ul>
                    </div>

                </div> --}}

    </div>

</section>

@endsection
