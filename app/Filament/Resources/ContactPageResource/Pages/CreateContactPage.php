<?php

namespace App\Filament\Resources\ContactPageResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ContactPageResource;

class CreateContactPage extends CreateRecord
{
    protected static string $resource = ContactPageResource::class;
}
