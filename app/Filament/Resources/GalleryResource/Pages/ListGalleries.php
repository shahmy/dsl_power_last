<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\GalleryResource;

class ListGalleries extends ListRecords
{
    protected static string $resource = GalleryResource::class;
}
