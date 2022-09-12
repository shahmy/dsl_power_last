@extends('layouts.app')

@section('content')
    <section class="page-title page-title-blank bg-white" id="page-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {{-- <h3 class="d-none">High Efficiency Solar Cells For Manufacturers</h3> --}}
                    <div class="breadcrumb-wrap">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('packages') }}">Packages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $singlePackage->name }}</li>
                        </ol>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="single-product" id="single-product">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="product-img"><img class="img-fluid"
                            src="{{ asset('storage/' . $singlePackage->featured_image) }}" alt="package8-full" /><a
                            class="img-popup" href="{{ asset('storage/' . $singlePackage->featured_image) }}"
                            alt="{{ $singlePackage->name }}"></a>
                    </div>

                </div>
                <div class="col-12 col-lg-6">
                    <div class="product-content">
                        <div class="product-title">
                            <h3>{{ $singlePackage->name }}</h3>
                        </div>



                        <div class="product-price"><span>Rs. {{ number_format($singlePackage->price, 2) }}</span></div>

                        {{-- <div class="product-desc">
                <p><strong>USAGE: </strong> 3500W LOAD STATUS & 2:30 hrs BACK-UP TIME</p>
              </div> --}}

                        <div class="product-details">
                            {!! $singlePackage->description !!}
                        </div>

                        <div class="product-share"><a class="facebook-bg" href="javascript:void(0)"><i
                                    class="fab fa-facebook-f"></i></a><a class="twitter-bg" href="javascript:void(0)"><i
                                    class="fab fa-twitter"></i></a><a class="pinterest-bg" href="javascript:void(0)"><i
                                    class="fab fa-pinterest"></i></a><a class="instagram-bg" href="javascript:void(0)"><i
                                    class="fab fa-instagram"></i></a></div>

                    </div>
                </div>



                <div class="col-12 col-lg-12 ">
                    <div class="product-tabs">

                        <ul class="nav nav-tabs" role="tablist">
                            @foreach ($singlePackage->products as $product )
                                <li role="presentation"><a class="@if($product->productCategory->active == 1) active @endif" href="#{{ \Illuminate\Support\Str::slug($product->productCategory->name)}}" data-bs-target="#{{Illuminate\Support\Str::slug($product->productCategory->name)}}"
                                        aria-controls="{{Illuminate\Support\Str::slug($product->productCategory->name)}}" role="tab" data-bs-toggle="tab"
                                        aria-selected="true">{{$product->productCategory->name}}</a>
                                </li>
                            @endforeach

                        </ul>


                               <div class="tab-content">

                                @foreach ($singlePackage->products as $product)

                                    <div class="tab-pane @if($product->productCategory->active == 1) active @endif" id="{{ \Illuminate\Support\Str::slug($product->productCategory->name)}}" role="tabpanel">
                                        <div class="row">
                                            @if (!empty($product->small_description))
                                           <div class="col-md-8">
                                                <h5>Key Features </h5>

                                                {!! $product->small_description !!}

                                            </div>
                                            @endif
                                            @if (!empty($product->galleries))
                                            <div class="col-md-4">

                                                <div class="project-image-carousel projects projects-gallery">
                                                    <div class="carousel owl-carousel carousel-navs" data-slide="1"
                                                        data-slide-rs="1" data-center="data-center" data-autoplay="true"
                                                        data-nav="true" data-dots="false" data-space="30" data-loop="true"
                                                        data-speed="5000">

                                                        @foreach ($product->galleries as $gallery)
                                                            @foreach ($gallery->photos as $photo)
                                                                <div class="project-panel">
                                                                    <div class="project-panel-holder">
                                                                        <div class="project-img"><img
                                                                                src="{{ asset('storage/' . $photo->image) }}"
                                                                                alt="{{ $gallery->name }}" />
                                                                            <div class="project-hover">
                                                                                <div class="project-action">
                                                                                    <div class="project-zoom"><i
                                                                                            class="far fa-eye"></i><a
                                                                                            class="img-gallery-item"
                                                                                            href="{{ asset('storage/' . $photo->image) }}"
                                                                                            title="{{ $gallery->name }}"></a>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div> <!-- end list -->
                                                            @endforeach
                                                        @endforeach

                                                    </div>

                                                </div>

                                            </div>
                                            @endif
                                        </div>
                                        @if (!empty($product->detail_description))
                                        <h5>Technical Specifications </h5>

                                        {!! $product->detail_description !!}
                                        @endif
                                        @if (!empty($product->featured_image))
                                        <img class="img-fluid" src="{{ asset('storage/' . $product->featured_image) }}" alt="{{$product->name}}" />
                                        @endif
                                    </div> <!-- end Invetor-->
                                    @endforeach

                        </div>


                    <!-- end product detais -->

                </div>

            </div>

        </div>
        </div>

    </section>


    @if (count($otherPackages) > 0)

    <section class="shop shop-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>Other Packages</h5>
                </div>
            </div>
            <div class="row">

                @foreach ($otherPackages as $pack )

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="product-item" data-hover="">
                        <div class="product-img-wrap">
                            <div class="product-img"><img src="{{ asset('storage/' . $pack->featured_image) }}" alt="{{ $pack->name }}" />
                            </div>

                        </div>

                        <div class="product-content">
                            <div class="product-title"><a href="{{ route('single-package',[$pack->id,$pack->slug]) }}">{{ $pack->name }}</a></div>
                            <!-- <div class="product-price"><span>$325.00</span></div> -->
                        </div>
                    </div>

                </div>

                @endforeach


            </div>

        </div>

    </section>
    @endif

@endsection

@push('scripts')
@endpush
