@extends('layouts.app')

@section('content')
<section class="page-title page-title-1" id="page-title">
    <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
        <div class="bg-section">
            <img src="{{ asset('site/assets/images/page-titles/5.jpg') }}"
                alt="contact-us-background" />
        </div>
    </div>
</section>

    <section class="testimonial testimonial-5 bg-overlay bg-overlay-white2">
        <div class="bg-section"></div>
        <div class="container">
            <div class="contact-panel contact-panel-2">
                <div class="row">

                    <div class="col-12 col-lg-12">
                        <div class="contact-card">
                            <div class="contact-body">
                                <h5 class="card-heading">Customer Payments - Step I</h5>
                                <p class="card-desc">We take great pride in everything that we do, control over
                                    products allows us to ensure our customers receive the best quality service.</p>
                                <form  method="post" action="{{route('search.customer.payment')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="fname">Invoice No</label>
                                            <input class="form-control  @error('invoice_no') is-invalid @enderror" type="text" id="invoice_no" name="invoice_no" placeholder="Invoice No" value="{{ old('invoice_no') }}" />
                                            @error('invoice_no')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn--secondary">Search <i class="energia-arrow-right"></i></button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>



        </div>

    </section>
@endsection
