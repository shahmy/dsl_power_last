<?php

namespace App\Mail;

use App\Models\CustomerPayment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerPaymentStatus extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($invoice_no)
    {
        $this->invoice_no = $invoice_no;
        $this->customerPayments = CustomerPayment::where('invoice_no', $this->invoice_no)->first();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('hello@dslsolarenergy.com', 'DSL Power Customer Payments')
            ->view('site.email.payment_status')
            ->with([
                'first_name' => $this->customerPayments->first_name,
                'last_name' => $this->customerPayments->last_name,
                'email' => $this->customerPayments->email,
                'invoice_no' => $this->customerPayments->invoice_no,
                'invoice_date' => $this->customerPayments->invoice_date,
                'invoice_details' => $this->customerPayments->invoice_details,
                'invoice_amount' => $this->customerPayments->invoice_amount,
                'payment_date' => $this->customerPayments->payment_date,
                'response_details' => $this->customerPayments->response_details,
                'payment_status' => $this->customerPayments->payment_status
            ]);
    }
}
