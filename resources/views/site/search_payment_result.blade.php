@extends('layouts.app')

@push('style')
<script type="text/javascript" src="https://sampath.paycorp.lk/webinterface/qw/paycorp_payments.js"></script>

@endpush

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
                                <h5 class="card-heading">Customer Payments - Step II</h5>

                                @if(!empty($listCustomerPayment))

                                @php
                                    $customerInvoiceNo = $listCustomerPayment->invoice_no;
                                    $customerPayment = $listCustomerPayment->invoice_amount * 100;
                                    $paymentDetails = strip_tags($listCustomerPayment->invoice_details);
                                @endphp

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
                                            <th>Payment Status</th>
                                            <td>
                                                {!! ($listCustomerPayment->payment_status == 1) ? '<span class="label label-success">Paid</span>' : '<span class="label label-danger">Pending</span>' !!}
                                            </td>
                                        </tr>

                                        

                                    </tbody>
                                </table>

                                <script>
                                    function buildPayment() {
                                      // Build the payment object
                                       return {
                                            clientId: 14005276,
                                            paymentAmount: <?php echo $customerPayment; ?>,
                                            currency: 'LKR',
                                            returnUrl: '<?php echo route("cutomer.payment.return") ?>',
                                            clientRef: '<?php echo $customerInvoiceNo; ?>',
                                            comment: '<?php echo $paymentDetails; ?>'
                                      };

                                      /* return {
                                        clientId: 14005276,
                                        paymentAmount: 1010,
                                        currency: 'LKR',
                                        returnUrl: '<?php echo route("cutomer.payment.return") ?>',
                                        clientRef: 'CREF-12345',
                                        comment: 'This is a demo payment'
                                    }; */
                                    }
                                  </script>

                                <div class="col-12">
                                    <a href="#" onClick="loadPaycorpPayment(buildPayment())"><button class="btn btn--secondary">Pay Now <i class="energia-arrow-right"></i></button></a>
                                </div>

                                @else

                                <p>Sorry! Customer payment details are not avilable. Please check your invoice no</p>

                                <div class="col-12" style="margin-top: 30px">
                                    <a href="{{ url()->previous() }}"><button style="width: 90px;height: 50px;" type="submit" class="btn btn--primary"> Back </button></a>
                                </div>

                                @endif

                            </div>

                        </div>
                    </div>
                </div>

            </div>



        </div>

    </section>
@endsection
