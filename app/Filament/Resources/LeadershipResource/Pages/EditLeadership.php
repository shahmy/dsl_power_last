<?php

namespace App\Filament\Resources\LeadershipResource\Pages;

use App\Filament\Resources\LeadershipResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLeadership extends EditRecord
{
    protected static string $resource = LeadershipResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
