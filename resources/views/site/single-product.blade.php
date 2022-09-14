@extends('layouts.app')

@section('content')
    <section class="page-title page-title-blank bg-white" id="page-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="d-none">{{$singleProduct->name}}</h3>
                    <div class="breadcrumb-wrap">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Products</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$singleProduct->name}}</li>
                        </ol>
                    </div>

                </div>

            </div>

        </div>

    </section>



    <section class="project-single" id="project-single">
        <div class="container">
            <div class="heading heading-20">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <h2 class="heading-title">{{$singleProduct->name}}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="project-image-carousel projects projects-gallery">
            <div class="carousel owl-carousel carousel-dots carousel-navs" data-slide="3" data-slide-rs="3"
                data-center="data-center" data-autoplay="true" data-nav="true" data-dots="false" data-space="30"
                data-loop="true" data-speed="800">
                @foreach ($singleProduct->galleries as $gallery )
                    @foreach ($gallery->photos as $photo)
                    <div class="">
                        <div class="project-panel">
                            <div class="project-panel-holder">
                                <div class="project-img"><img src="{{ asset('storage/' . $photo->image) }}" alt="{{ $gallery->name }}" />
                                    <div class="project-hover">
                                        <div class="project-action">
                                            <div class="project-zoom"><i class="far fa-eye"></i><a class="img-gallery-item" href="{{ asset('storage/' . $photo->image) }}"
                                                    title="{{ $gallery->name }}"></a></div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    @endforeach
                @endforeach


            </div>

        </div>
    </section>

    <section class="single-product" id="single-product">
        <div class="container">

            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="product-tabs">

                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation"><a class="active" href="#description" data-bs-target="#description"
                                    aria-controls="description" role="tab" data-bs-toggle="tab" aria-selected="true">Key
                                    Features</a>
                            </li>
                            <li role="presentation"><a href="#details" data-bs-target="#details" aria-controls="details"
                                    role="tab" data-bs-toggle="tab" aria-selected="false">Technical Specifications</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="description" role="tabpanel">
                                {!! $singleProduct->small_description !!}
                            </div>

                            <div class="tab-pane" id="details" role="tabpanel">
                                <h5>Technical Details</h5>
                                {!! $singleProduct->detail_description !!}

                            </div>



                        </div>

                    </div>

                </div>

            </div>
        </div>

    </section>

    <section class="shop shop-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5>related products</h5>
                </div>
            </div>
            <div class="row">
                @forelse ($recetProduct as $product )
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="product-item" data-hover="">
                        <div class="product-img-wrap">
                            <div class="product-img"><img
                                    src="{{ asset('storage/'.$product->featured_image) }}" alt="{{$product->name}}" /><a
                                    class="add-to-cart" href="{{route('show.single.product',[$product->id, \Illuminate\Support\Str::slug($product->name)])}}">View Details</a><span class="badge d-none"></span>
                            </div>

                        </div>

                        <div class="product-content">
                            <div class="product-title"><a href="{{route('show.single.product',[$product->id, \Illuminate\Support\Str::slug($product->name)])}}">{{$product->name}}</a></div>

                        </div>

                    </div>

                </div>

                @empty

                <div class="col-12 col-md-12 col-lg-12">
                    <p>Sorry! no related products</p>
                </div>

                @endforelse


            </div>

        </div>

    </section>
@endsection
