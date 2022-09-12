@extends('layouts.app')
@section('content')
    <section class="page-title page-title-1" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
            <div class="bg-section"><img src="{{ asset('site/assets/images/background/07.jpg') }}" alt="Leadership_backround_image" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">Leadership</h1>
                            <p class="title-desc"></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Leadership</li>
                </ol>

            </div>
        </div>

    </section>


    <section class="about about-1 Partners-pt0 leadership">
        <div class="container">
            <div class="row">
                @foreach ($leadrships as $leaders )

                <div class="col-12 col-lg-12 leaders">

                    <div class="heading">
                        <h4 class="heading-title">{{ $leaders->name }}</h4>
                    </div>

                    <div class="about-block">
                        <div class="row">

                            <div class="col-12 col-lg-12">
                                <div class="block-left">
                                    {!! $leaders->detail_description !!}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

               {{--  @endif --}}

                @endforeach


            </div>

        </div>

    </section>



   @endsection
