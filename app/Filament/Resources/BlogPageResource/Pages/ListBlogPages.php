<?php

namespace App\Filament\Resources\BlogPageResource\Pages;

use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\BlogPageResource;

class ListBlogPages extends ListRecords
{
    protected static string $resource = BlogPageResource::class;
}
