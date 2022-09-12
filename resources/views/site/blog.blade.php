@extends('layouts.app')

@section('content')
    <section class="page-title page-title-1" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
            <div class="bg-section"><img src="{{ asset('storage/' . $blogPage->title_bg_image) }}"
                    alt="{{ $blogPage->name }}_backround_image" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">{{ $blogPage->name }}</h1>
                            <p class="title-desc">{{ $blogPage->title_description }}</p>
                            {{--<div class="title-action"> <a class="btn btn--primary" href="page-services.html">
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
                    <li class="breadcrumb-item active" aria-current="page">{{ $blogPage->name }}</li>
                </ol>

            </div>
        </div>

    </section>


    <section class="blog blog-grid blog-grid-5" id="blog">
        <div class="container">
            <div class="row">

                @foreach ($allPost as $post)

                <div class="col-12 col-md-6 col-lg-4">

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
                            <div class="entry-more text-center"> <a class="btn btn--white
                                btn-bordered" href="{{ route('single-blog',[$post->id,$post->slug]) }}">read more <i
                                        class="energia-arrow-right"></i></a></div>
                        </div>
                    </div>



                </div>



                @endforeach



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
