@extends('layouts.app')

@section('content')

@if (!empty($sliders))

    <section class="slider slider-3" id="slider-3">
        <div class="container-fluid pe-0 ps-0">
            <div class="slider-carousel owl-carousel carousel-navs carousel-dots" data-slide="1" data-slide-rs="1"
                data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="800">

                @foreach ($sliders as $slider )

                <div class="slide bg-overlay bg-overlay-dark-slider">
                    <div class="bg-section"><img src="{{ asset('storage/'.$slider->image) }}" alt="{{ $slider->title }}" /></div>
                    <div class="container">
                        <div class="slide-content">
                            <div class="row">
                                <div class="col-12 col-lg-7">
                                    <h1 class="slide-headline">{{ $slider->title }}</h1>
                                    @if (!empty($slider->description))

                                        {!! $slider->description !!}

                                    @endif
                                    <!-- <div class="slide-action">
                                        <a class="btn btn--white" href="{{ $slider->button_url }}">
                                            <span>{{ $slider->button_name }}</span><i class="energia-arrow-right"></i></a>
                                    </div> -->
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                @endforeach



            </div>

        </div>

    </section>

    @endif

   {{--  <section class="company-data" id="company-data-1">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 col-lg-3">
                    <div class="data">
                        <div class="data-icon"><i class="icons-energiaphone-call"></i></div>
                        <div class="data-body">
                            <h6>Contact </h6>
                            <p>email:info@douglas.lk</a></p>
                            <p>phone: <a href="#">94 11 560 8400</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="data">
                        <div class="data-icon"><i class="icons-energialocation"></i></div>
                        <div class="data-body">
                            <h6>Location</h6>
                            <p>290/25, Sri Sangaraja Mawatha Colombo 10, Sri Lanka. </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1">
                    <div class="panels-container">
                        <div class="panel-action">
                            <div class="panel-icon"><i class="flaticon-040-green-energy"></i></div>
                            <div class="panel-content">
                                <h6 class="panel-heading">Residential, Commercial And Industrial Solar Systems!</h6>
                                <p class="panel-desc">Our presence ensures timeliness, cost efficiency & compliance
                                    adherence!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="about about-3" id="about-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="heading heading-12">
                        <p class="heading-subtitle">{{ $homeAboutSection->sub_heading }}</p>
                        <h2 class="heading-title">{{ $homeAboutSection->heading }}</h2>
                    </div>
                    <div class="about-block">
                        <div class="block-left">
                            {!! $homeAboutSection->description !!}
                            <div class="signature-block"><a class="btn btn--secondary" href="{{ route('about-us') }}">{{ $homeAboutSection->button_name }} <i
                                        class="energia-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-5 offset-lg-1">
                    <div class="about-img">
                        <div class="about-img-holder bg-overlay">
                            <div class="bg-section"><img src="{{ asset('storage/'.$homeAboutSection->image) }}" alt="{{ $homeAboutSection->heading }}" /></div>
                        </div>

                        <div class="counter counter-4">
                            <div class="counter-num">
                                <h6>{{ $homeAboutSection->image_title }}</h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </section>

    @if (!empty($packages))


    <section class="services services-3 bg-overlay bg-overlay-white2" id="services-3">
        <!-- <div class="bg-section"><img src="{{ asset('site/assets/images/background/wavy-pattern.png') }}" alt="background" /></div> -->
        <div class="container">
            <div class="heading heading-13 text-center">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <p class="heading-subtitle">Energize Society With Sustainable Energy!</p>
                        <h2 class="heading-title">Packages</h2>
                    </div>

                </div>

            </div>

            <div class="carousel owl-carousel carousel-dots" data-slide="4" data-slide-rs="1" data-autoplay="true"
                data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">

                @foreach ($packages as $package )

                <div>
                    <div class="service-panel services-panel-3">
                        <div class="service-img"> <img src="{{ asset('storage/'.$package->featured_image) }}" alt="image" /></div>
                        <div class="service-content">
                            <h4><a href="{{ route('single-package',[$package->id,$package->slug]) }}">{{ $package->name }}</a></h4>
                            <a class="btn btn--secondary" href="{{ route('single-package',[$package->id,$package->slug]) }}">More Details<i
                                    class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                @endforeach


            </div>

        </div>

    </section>

@endif

    {{-- <section class="quote quote-1" id="quote-1">

        <div class="container">
            <div class="contact-panel contact-panel-2">
                <div class="row">
                    <div class="col-12 col-lg-5 img-card-holder">
                        <div class="img-card img-card-2 bg-overlay bg-overlay-theme">
                            <!-- <div class="bg-section"><img src="{{ asset('site/assets/images/contact/2.jpg') }}" alt="image" /></div> -->
                            <div class="card-content">
                                <div class="content-top">
                                    <p>DSL Solar Energy offers a range of premium quality On-Grid & Off-Grid solar power systems custom designed and installed by our accredited and licenced team.</p><a
                                        href="#"><i class="energia-arrow-right"></i>office map</a>
                                </div>
                                <div class="content-bottom">
                                    <ul class="list-unstyled contact-infos">
                                        <li class="contact-info"><i class="energia-phone-Icon"></i>
                                            <p>Hot Line : <a href="#">+94 772 211 211</a></p>
                                        </li>
                                        <li class="contact-info"><i class="energia-location-Icon"></i>
                                            <p>Location : 290/25, Sri Sangaraja Mawatha Colombo 10.</a></p>
                                        </li>
                                        <li class="contact-info"><i class="energia-clock-Icon"></i>
                                            <p>e-mail : info@douglas.lk</p>
                                        </li>
                                    </ul><a class="btn btn--white" href="{{ route('contact-us') }}">contact us <i
                                            class="energia-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-7">
                        <div class="contact-card">
                            <div class="contact-body">
                                <h5 class="card-heading">Custom Quote</h5>
                                <p class="card-desc">Let us know your power requirement, Generate your own custom Quote</p>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="select-1">Lights (LED)</label>
                                        <select class="form-control" id="select-1">
                                            <option value="default">3</option>
                                            <option value="AL">5</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="select-2">Fans</label>
                                        <select class="form-control" id="select-2">
                                            <option value="default">2</option>
                                            <option value="AL">3</option>
                                            <option value="AK">4</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="contact-usage">Refrigerator</label>
                                        <input class="form-control" type="text" id="contact-usage"
                                            name="contact-usage" placeholder="1254 KWH" required="" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="select-3">Microwave</label>
                                        <input class="form-control" type="text" id="contact-usage"
                                            name="contact-usage" placeholder="1254 KWH" required="" />
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="select-4">Air Conditioner</label>
                                        <select class="form-control" id="select-4">
                                            <option value="default">9000 BUT</option>
                                            <option value="AL">12000 BUT</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="select-5">Materials on your roof?</label>
                                        <select class="form-control" id="select-5">
                                            <option value="default">Roof tiles</option>
                                            <option value="AL">roofing sheets</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Preferred Contact Method</label>
                                        <div class="custom-radio-group" id="custom-radio-group">
                                            <div class="custom-control">
                                                <input class="custom-control-input" type="radio"
                                                    id="customRadioInline1" name="customRadioInline1" />
                                                <label for="customRadioInline1">all</label>
                                            </div>
                                            <div class="custom-control">
                                                <input class="custom-control-input" type="radio"
                                                    id="customRadioInline2" name="customRadioInline1" />
                                                <label for="customRadioInline2">email</label>
                                            </div>
                                            <div class="custom-control">
                                                <input class="custom-control-input" type="radio"
                                                    id="customRadioInline3" name="customRadioInline1" />
                                                <label for="customRadioInline3">phone</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn--secondary w-100">submit request <i
                                                class="energia-arrow-right"></i></button>
                                    </div>
                                    <div class="col-12">
                                        <div class="contact-result"></div>
                                    </div>
                                </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section> --}}

    <section class="features features-2 bg-overlay bg-overlay-theme2" id="features-2">
        <!-- <div class="bg-section"> <img src="{{ asset('site/assets/images/background/2.jpg') }}" alt="Background" /></div> -->
        <div class="container">
            <div class="heading heading-12 text-center">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <p class="heading-subtitle">Sustainable, Reliable & Affordable Energy!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <h2 class="heading-title">Providing Value To Our Customers, Through Service Excellence.</h2>
                    </div>
                    {{-- <div class="col-12 col-lg-6 offset-lg-1">

                        <div class="actions-holder"><a class="btn btn--primary btn--inversed" href="{{ route('packages') }}">get
                                started<i class="energia-arrow-right"></i></a></div>
                    </div> --}}
                </div>

            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="feature-panel-holder" data-hover="">
                        <div class="feature-panel">
                            <div class="feature-icon"><i class="flaticon-024-energy"></i></div>
                            <div class="feature-content">
                                <h4>Save Your Money</h4>
                                <p style="margin-bottom: 49%">Investing in Green Energy can significantly protect you from skyrocketing electricity bills for a lifetime. </p>
                            </div>{{-- <a href="#"><i class="energia-arrow-right"></i> <span>explore more</span> </a> --}}
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="feature-panel-holder" data-hover="">
                        <div class="feature-panel">
                            <div class="feature-icon"><i class="flaticon-028-greenhouse"></i></div>
                            <div class="feature-content">
                                <h4>Home Is Energy</h4>
                                <p style="margin-bottom: 29%">Having an energy independent home or business is enticing since you can generate your own electricity by harnessing the sun’s free energy. Never again will you need to rely on a third party.</p>
                            </div>{{-- <a href="#"><i class="energia-arrow-right"></i> <span>explore more</span> </a> --}}
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="feature-panel-holder" data-hover="">
                        <div class="feature-panel">
                            <div class="feature-icon"><i class="flaticon-026-world"></i></div>
                            <div class="feature-content">
                                <h4>Consult &amp; Planning</h4>
                                <p>We have a track record of unveiling the power of green energy. We work with clients across the nation, providing full-service due diligence services from consulting to planning through implementation and optimization of solar energy systems.</p>
                            </div>
                            {{-- <a href="#"><i class="energia-arrow-right"></i> <span>explore more</span> </a> --}}
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="feature-panel-holder" data-hover="">
                        <div class="feature-panel">
                            <div class="feature-icon"><i class="flaticon-008-plant"></i></div>
                            <div class="feature-content">
                                <h4>Certified Engineers</h4>
                                <p>We have a certified engineering team who are industry professionals to provide the best solutions to the customers with the aspiration of exceeding their expectations in quality and investment for owning a solar system.</p>
                            </div>{{-- <a href="#"><i class="energia-arrow-right"></i> <span>explore more</span> </a> --}}
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="more-features more-features-3">
                        <p>Sustainable, reliable & affordable energy systems, <a href="{{ route('packages') }}">Find Your Package Now!
                            </a></p>
                    </div>
                </div>
            </div>

        </div>

    </section>


    @if (!empty($testimonials))

    {{-- <section class="testimonial testimonial-3 bg-overlay bg-overlay-white2">
        <div class="bg-section"><img src="{{ asset('site/assets/images/background/wavy-pattern.png') }}" alt="background" /></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="counters-holder">

                        <div class="counter counter-3">
                            <div class="counter-holder">
                                <div class="counter-num"> <span class="counting" data-counterup-nums="25"
                                        data-counterup-beginat="12">25</span></div>
                                <div class="counter-img">
                                    <div class="bg-section"><img src="{{ asset('site/assets/images/counters/1.jpg') }}" alt="image" />
                                    </div><i class="flaticon-020-factory"></i>
                                </div>
                            </div>
                            <div class="counter-desc">
                                <p>Years Of Experience In The Solar Industry</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-7 offset-lg-1">
                    <div class="heading heading-14">
                        <p class="heading-subtitle">Customers Doing it Their Way!</p>
                    </div>
                    <div class="testimonials-holder">
                        <div class="carousel owl-carousel testimonials-carousel" data-slide="1" data-slide-rs="1"
                            data-autoplay="true" data-nav="false" data-dots="false" data-space="0" data-loop="false"
                            data-speed="800">

                            @foreach ($testimonials as $testimonial )


                            <div class="testimonial-panel testimonial-panel-2">
                                <div class="testimonial-body">
                                    <div class="testimonial-content">
                                        {!! $testimonial->description !!}
                                    </div>
                                </div>
                            </div>

                            @endforeach


                        </div>
                    </div>
                    <div class="testimonial-thumbs">

                        @foreach ($testimonials as $testimonial )

                        <div class="testimonial-thumb active" data-hover="">
                            <div class="thumb-img"> <img src="{{ asset('storage/'.$testimonial->logo) }}"
                                    alt="Testimonial Author" /></div>
                            <div class="thumb-body">
                                <h6>{{ $testimonial->name }}</h6>
                                <p>{{ $testimonial->company_name}}</p>
                            </div>
                        </div>

                        @endforeach



                    </div>
                </div>
            </div>

        </div>

    </section> --}}
    @endif

    @if (!empty($posts))



    <section class="blog blog-2 blog-grid" id="blog-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-11 text-center">
                        <p class="heading-subtitle">News & Articles</p>
                        <h2 class="heading-title">recent articles</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                @foreach ($posts as $post)

                <div class="col-12 col-lg-4">
                    <div class="blog-entry" data-hover="">
                        <div class="entry-content">
                            <div class="entry-title text-center">
                                <h4><a href="{{ route('single-blog',[$post->id,$post->slug]) }}">{{ $post->title }}</a></h4>
                            </div>
                            <div class="entry-img-wrap">
                                <div class="entry-img">
                                    <a href="{{ route('single-blog',[$post->id,$post->slug]) }}"><img src="{{ asset('storage/'.$post->featured_image) }}"
                                            alt="{{ $post->title }}" /></a>
                                </div>
                                @if (!empty($post->categories))
                                <div class="entry-category">
                                    @foreach ( $post->categories as $category )
                                        <a href="#">{{ $category->name}}</a>
                                    @endforeach

                                </div>
                                @endif

                            </div>

                            <div class="entry-bio">
                                {!! $post->small_description !!}
                            </div>
                            <div class="entry-more text-center"> <a class="btn btn--white btn-bordered" href="{{ route('single-blog',[$post->id,$post->slug]) }}">read more <i
                                        class="energia-arrow-right"></i></a></div>
                        </div>
                    </div>

                </div>

                @endforeach


            </div>
            <div class="row">
                <div class="col-12">
                    <div class="more-blog"><a href="{{ route('blog') }}">find out more about our news!</a></div>
                </div>
            </div>

        </div>

    </section>


    @endif

@endsection
