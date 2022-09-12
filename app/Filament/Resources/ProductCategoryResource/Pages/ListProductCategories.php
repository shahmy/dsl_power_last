<?php

namespace App\Filament\Resources\ProductCategoryResource\Pages;

use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ProductCategoryResource;

class ListProductCategories extends ListRecords
{
    protected static string $resource = ProductCategoryResource::class;
}
