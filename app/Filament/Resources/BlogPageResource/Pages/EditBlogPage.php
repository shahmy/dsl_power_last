<?php

namespace App\Filament\Resources\BlogPageResource\Pages;

use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\BlogPageResource;

class EditBlogPage extends EditRecord
{
    protected static string $resource = BlogPageResource::class;
}
