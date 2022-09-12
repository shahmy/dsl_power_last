<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomQuote extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($full_name,$email_address,$phone_no,$mobile_no,$address,$loadItemName,$loadItemWatts,$LoadItemQuantity)
    {
        $this->full_name = $full_name;
        $this->email_address = $email_address;
        $this->phone_no = $phone_no;
        $this->mobile_no = $mobile_no;
        $this->address = $address;
        $this->loadItemName = $loadItemName;
        $this->loadItemWatts = $loadItemWatts;
        $this->LoadItemQuantity = $LoadItemQuantity;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

       return $this->from('hello@dslsolarenergy.com', 'DSL Power Custom Quote')
                    ->view('site.email.theme')
                    ->with([
                        'full_name' => $this->full_name,
                        'email_address' => $this->email_address,
                        'phone_no' => $this->phone_no,
                        'mobile_no' => $this->mobile_no,
                        'address' => $this->address,
                        'loadItemName' => $this->loadItemName,
                        'loadItemWatts' => $this->loadItemWatts,
                        'LoadItemQuantity' => $this->LoadItemQuantity,
                    ]);
    }
}
