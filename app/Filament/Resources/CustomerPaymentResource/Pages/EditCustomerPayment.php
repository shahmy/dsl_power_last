<?php

namespace App\Filament\Resources\CustomerPaymentResource\Pages;

use App\Filament\Resources\CustomerPaymentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomerPayment extends EditRecord
{
    protected static string $resource = CustomerPaymentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
