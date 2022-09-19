<?php

namespace App\Filament\Resources\CustomerPaymentResource\Pages;

use App\Filament\Resources\CustomerPaymentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomerPayment extends CreateRecord
{
    protected static string $resource = CustomerPaymentResource::class;
}
