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
                                <h5 class="card-heading">Customer Payments - Response Details</h5>

                                {!! $response_msg !!}

                                <table class="table responsive">
                                    <tbody>
                                        <tr>
                                            <th>Invoice No / Ref. No</th>
                                            <td>{{$listCustomerPayment->invoice_no}}</td>
                                        </tr>
                                        <tr>
                                            <th>Invoice Date</th>
                                            <td>{{$listCustomerPayment->invoice_date}}</td>
                                        </tr>
                                        <tr>
                                            <th>Customer Name</th>
                                            <td>{{$listCustomerPayment->first_name}} {{$listCustomerPayment->last_name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email Address</th>
                                            <td>{{$listCustomerPayment->email}}</td>
                                        </tr>
                                        <tr>
                                            <th>Invoice Amount (Rs.)</th>
                                            <td>{{number_format((float)$listCustomerPayment->invoice_amount,2,'.','')}}</td>
                                        </tr>
                                        <tr>
                                            <th>Invoice Details</th>
                                            <td>{!! $listCustomerPayment->invoice_details !!}</td>
                                        </tr>

                                        <tr>
                                            <th>Paid Date</th>
                                            <td>{{ $listCustomerPayment->payment_date }}</td>
                                        </tr>

                                        <tr>
                                            <th>Payment Status</th>
                                            <td>
                                                {!! ($listCustomerPayment->payment_status == 1) ? '<span class="label label-success">Paid</span>' : '<span class="label label-danger">Pending</span>' !!}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Response Details</th>
                                            <td>
                                                @php
                                                   $resDetails = json_decode($listCustomerPayment->response_details,true);
                                                @endphp

                                                <table class="table">
                                                    <tr>
                                                        <td>Response Text</td>
                                                        <td>{{ $resDetails['responseText']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>txn Reference</td>
                                                        <td>{{ $resDetails['txnReference']}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Response Code</td>
                                                        <td>{{ $resDetails['responseCode']}}</td>
                                                    </tr>
                                                </table>

                                            </td>
                                        </tr>


                                    </tbody>
                                </table>

                                <div class="col-12" style="margin-top: 30px">
                                    <a href="{{ route('customer.payment') }}"><button style="width: 90px;height: 50px;" type="submit" class="btn btn--primary"> Back </button></a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>



        </div>

    </section>
@endsection
