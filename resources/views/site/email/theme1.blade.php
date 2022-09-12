@extends('layouts.app')

@section('content')
    <section class="testimonial testimonial-5 bg-overlay bg-overlay-white2">
        <div class="bg-section"><img src="{{ asset('site/assets/images/background/wavy-pattern.png') }}" alt="background" />
        </div>
        <div class="container">
            <div class="contact-panel contact-panel-2">
                <div class="row">



                    <div class="col-12 col-lg-12">
                        <div class="contact-card">
                            <div class="contact-body">
                                <h5 class="card-heading">Custom Quote</h5>
                                <p class="card-desc">Let us know your power requirement, Generate your own custom Quote</p>
                                <form method="post" action="#">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="fname">Full Name</label>
                                            <input class="form-control" type="text" id="contact-name" name="full_name"
                                            value="{{ $full_name }}" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="Email">Email</label>
                                            <input class="form-control" type="text" id="contact-email"
                                                name="email_address" value="{{ $email_address }}"/>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="phone">Phone</label>
                                            <input class="form-control" type="text" id="contact-phone"
                                                name="phone_no" value="{{ $phone_no }}" />
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="Mobile">Mobile</label>
                                            <input class="form-control" type="text" id="contact-phone"
                                                name="mobile_no" value="{{ $mobile_no }}" />
                                        </div>

                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="Mobile">Address</label>
                                            <textarea class="form-control" id="contact-address" name="address" cols="30"
                                                rows="10">{{ $address }}</textarea>
                                        </div>


                                    </div>

                                    <h6>Enter Products Details</h6>



                                    <div class="table-responsive">
                                        <table class="table myTable">
                                            <thead>
                                                <tr>
                                                    <th>Load Items</th>
                                                    <th>Watts</th>
                                                    <th class="text-right">Qnty</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                    @foreach ($LoadItemQuantity as $key => $value)
                                                        @if (!empty($value))


                                                        <tr>
                                                            <td>
                                                                {{ $loadItemName[$key] }}

                                                            </td>
                                                            <td>
                                                                {{ $loadItemWatts[$key] }}

                                                            </td>
                                                            <td class="text-right">
                                                                {{ $value }}

                                                            </td>
                                                            {{-- <td class="text-right"></td> --}}
                                                        </tr>
                                                        @endif
                                                    @endforeach



                                            </tbody>
                                        </table>
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

