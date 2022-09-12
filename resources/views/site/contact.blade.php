@extends('layouts.app')

@section('content')
    <section class="page-title page-title-1" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
            <div class="bg-section"><img src="{{ asset('site/assets/images/page-titles/5.jpg') }}"
                    alt="contact-us-background" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">{{-- {{ $contactPage->name }} --}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial testimonial-5 bg-overlay bg-overlay-white2">
        <div class="bg-section"><img src="{{ asset('site/assets/images/background/wavy-pattern.png') }}" alt="background" />
        </div>
        <div class="container">
            <div class="contact-panel contact-panel-2">
                <div class="row">

                    {{-- <div class="col-12 col-lg-5 img-card-holder">
                        <div class="img-card img-card-2 bg-overlay bg-overlay-theme">
                            <div class="bg-section"><img src="{{ asset('site/assets/images/contact/2.jpg') }}" alt="image" />
                            </div>
                            <div class="card-content">
                                <div class="content-top">
                                    <p>DSL Solar Energy offers a range of premium quality On-Grid & Off-Grid solar power systems custom designed and installed by our accredited and licenced team.
                                    </p>
                                </div>
                                <div class="content-bottom">
                                    <ul class="list-unstyled contact-infos">
                                        <li class="contact-info"><i class="energia-phone-Icon"></i>
                                            <p>Hot Line : <a href="#">+94 772 211 211</a></p>
                                        </li>
                                        <li class="contact-info"><i class="energia-location-Icon"></i>
                                            <p>Location : 290/25, Sri Sangaraja Mawatha Colombo 10.</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-12 col-lg-12">
                        <div class="contact-card">
                            <div class="contact-body">
                                
                                @if(Session::has('message'))
                                    <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                                @endif
                                
                                <h5 class="card-heading">Custom Quote</h5>
                                <p class="card-desc">Let us know your power requirement, Generate your own custom Quote</p>

                                

                                <form method="post" action="{{ route('submit.custom.quote') }}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="fname">Full Name</label>
                                            <input class="form-control @error('title') is-invalid @enderror" type="text" id="contact-name" name="full_name"
                                                placeholder="Full Name" value="{{ old('full_name') }}" required="" />
                                                @error('full_name')
                                                    <div class="error">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="Email">Email</label>
                                            <input class="form-control @error('title') is-invalid @enderror" type="text" id="contact-email"
                                                name="email_address" value="{{ old('email_address') }}" placeholder="Email" required="" />
                                                @error('email_address')
                                                    <div class="error">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="phone">Phone</label>
                                            <input class="form-control @error('title') is-invalid @enderror" type="text" id="contact-phone"
                                                name="phone_no" placeholder="Phone"  value="{{ old('phone_no') }}" required="" />
                                                 @error('phone_no')
                                                    <div class="error">{{ $message }}</div>
                                                @enderror
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="Mobile">Mobile</label>
                                            <input class="form-control @error('title') is-invalid @enderror" type="text" id="contact-phone"
                                                name="mobile_no" placeholder="Mobile" value="{{ old('mobile_no') }}" required="" />
                                                @error('mobile_no')
                                                    <div class="error">{{ $message }}</div>
                                                @enderror
                                        </div>

                                        <div class="col-12 col-md-12">
                                            <label class="form-label" for="Mobile">Address</label>
                                            <textarea class="form-control @error('title') is-invalid @enderror" id="contact-address" placeholder="Address" name="address" cols="30"
                                                rows="10">{{ old('address') }}</textarea>
                                                @error('address')
                                                    <div class="error">{{ $message }}</div>
                                                @enderror
                                        </div>


                                    </div>

                                    <h6>Enter Products Details</h6>

                                    {{-- <div class="row">

                                        <div class="col-12 col-md-3">
                                            <label class="form-label" for="ApplianceCategory">Appliance Category</label>
                                            <select class="form-control" name="application_category_id"
                                                id="application_category_id" onchange="loadAppItems(this.value)"
                                                required="">
                                                <option value="">Select Appliance Category</option>
                                                @foreach ($application_categories as $categories)
                                                    <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label class="form-label" for="litems">Load Items</label>
                                            <select name="load_items" class="form-control" id="load_items">
                                                <option value="">Select Load Items</option>
                                            </select>
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <label class="form-label" for="watts">Watts</label>
                                            <input class="form-control" type="text" id="watts" name="watts"
                                                placeholder="Watts" />
                                        </div>

                                        <div class="col-12 col-md-2">
                                            <label class="form-label" for="quantity">Quantity</label>
                                            <input class="form-control" type="number" min="1" id="quantity" name="quantity"
                                                placeholder="Quantity" />
                                        </div>

                                        <div class="col-12 col-md-1">
                                            <label class="form-label"></label>
                                            <button class="btn btn--primary w-100 ">+</button>
                                        </div>


                                    </div> --}}

                                    <div class="table-responsive">
                                        <table class="table myTable">
                                            <thead>
                                                <tr>
                                                    <th>Appliance Category</th>
                                                    <th>Load Items</th>
                                                    <th>Watts</th>
                                                    <th class="text-right">Qnty</th>
                                                    {{-- <th class="text-right">Total Wattage/Load</th> --}}

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($application_categories as $categories)
                                                <tr>
                                                    <td colspan="5" style="background-color: #32c36c;
                                                    color: #fff;">
                                                        {{ $categories->name }}
                                                        <input type="hidden" name="loadItemCatId[]" value="{{ $categories->id }}" />

                                                        <input type="hidden" name="loadItemCatName[]" value="{{ $categories->name }}" />
                                                    </td>
                                                </tr>
                                                    @foreach ($categories->loadItems as $item)
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                {{ $item->name }}
                                                            <input type="hidden" name="loadItemId[]" value="{{ $item->id }}" />

                                                            <input type="hidden" name="loadItemName[]" value="{{ $item->name }}" />


                                                            </td>
                                                            <td>
                                                                {{ $item->watts }}
                                                                <input type="hidden" name="loadItemWatts[]" value="{{ $item->watts }}" />
                                                            </td>
                                                            <td class="text-right">
                                                                <input type="number" name="LoadItemQuantity[]" min="1" >

                                                            </td>
                                                            {{-- <td class="text-right"></td> --}}
                                                        </tr>
                                                    @endforeach
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="row">

                                        <div class="col-12">
                                            <button type="submit" class="btn btn--secondary w-100">submit request <i
                                                    class="energia-arrow-right"></i></button>
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

    <section class="map map-2">

        {!! $contactPage->google_map !!}

    </section>
@endsection

@push('scripts')
    <script>
        function loadAppItems(string) {
            var appId = string;
            var token = $("input[name='_token']").val();

            $.ajax({
                url: "<?php echo route('load.application.items'); ?>",
                method: 'POST',
                data: {
                    appId: appId,
                    _token: token
                },
                dataType: "json",
                success: function(data) {

                    $('#load_items').append('<option value="">' +
                        'Select load items' + '</option>');

                    console.log(data);

                    /* alert(data);
                    jQuery('select[name="load_items"]').empty(); */
                    $('#load_items').append('<option value="">' +
                        'Select load items' + '</option>');
                    $.each(data, function(key, value) {
                        $('#load_items').append('<option value="' +
                            value.id + '">' + value.name + '</option>');
                    });

                    $('#watts').val(data);
                }
            });


        }
    </script>
@endpush
