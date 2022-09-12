<?php

namespace App\Filament\Resources\ContactPageResource\Pages;

use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ContactPageResource;

class EditContactPage extends EditRecord
{
    protected static string $resource = ContactPageResource::class;
}
