<?php

namespace App\Filament\Resources\ActivitesResource\Pages;

use App\Filament\Resources\ActivitesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditActivites extends EditRecord
{
    protected static string $resource = ActivitesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
