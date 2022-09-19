<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'invoice_no',
        'invoice_date',
        'invoice_details',
        'invoice_amount',
        'payment_date',
        'invoice_file',
        'response_details',
        'payment_status',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'customer_payments';

     /* protected $casts = [
        'response_details' => 'array',
      ]; */
}
