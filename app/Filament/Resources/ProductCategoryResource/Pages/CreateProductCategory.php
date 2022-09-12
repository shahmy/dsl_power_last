<?php

namespace App\Filament\Resources\ProductCategoryResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ProductCategoryResource;

class CreateProductCategory extends CreateRecord
{
    protected static string $resource = ProductCategoryResource::class;
}
