@extends('layouts.app')

@section('content')
<section class="page-title page-title-9" id="page-title">
    <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
        <div class="bg-section"><img src="{{asset('site/assets/images/page-titles/9.jpg')}}" alt="Background" /></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="title text-center">
                        <h1 class="title-heading">{{$singleCategory->name}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb d-flex">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$singleCategory->name}}</li>
            </ol>
        </div>
    </div>
</section>


<section class="shop" id="shop">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">

                <div class="row">
                    @if (count($productList) > 0)
                    @foreach ($productList as $product )
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="product-item" data-hover="">
                            <div class="product-img-wrap">
                                <div class="product-img"><img src="{{ asset('storage/'.$product->featured_image) }}" alt="{{$product->name}}" /><a class="add-to-cart" href="{{route('show.single.product',[$product->id, \Illuminate\Support\Str::slug($product->name)])}}"> View Details</a><span
                                        class="badge d-none"></span>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-title"><a href="{{route('show.single.product',[$product->id, \Illuminate\Support\Str::slug($product->name)])}}">{{$product->name}}</a></div>
                            </div>

                        </div>

                    </div>
                    @endforeach

                    @else
                    <div class="col-12 col-md-12 col-lg-12">
                        <h4 class="text-center">Sorry! products not available !</h4>
                    </div>

                    @endif

                </div>

                <!-- <div class="row">
                            <div class="col-12 clearfix text--center mt-3">
                                <ul class="pagination">
                                    <li><a class="current" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#" aria-label="Next"><i class="energia-arrow-right"></i></a></li>
                                </ul>
                            </div>

                        </div> -->

            </div>


            {{-- <div class="col-12 col-lg-3">
                <div class="sidebar sidebar-shop">

                    <div class="widget widget-categories">
                        <div class="widget-title">
                            <h5>categories</h5>
                        </div>
                        <div class="widget-content">
                            <ul class="list-unstyled">
                                <li><a href="#">Solar PCU</a></li>
                                <li><a href="#">UPS/Home Inverters</a></li>
                                <li><a href="#">Mono & Poly Pannels</a></li>
                                <li><a href="#">Solar Tubler</a></li>
                                <li><a href="#">Inverter Tubler</a></li>
                            </ul>
                        </div>
                    </div>



                </div>

            </div> --}}

        </div>

    </div>

</section>
@endsection
