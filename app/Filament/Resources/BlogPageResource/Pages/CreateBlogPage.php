<?php

namespace App\Filament\Resources\BlogPageResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\BlogPageResource;

class CreateBlogPage extends CreateRecord
{
    protected static string $resource = BlogPageResource::class;
}
