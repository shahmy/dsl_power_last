<?php

namespace App\Filament\Resources\ContactPageResource\Pages;

use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ContactPageResource;

class ListContactPages extends ListRecords
{
    protected static string $resource = ContactPageResource::class;
}
