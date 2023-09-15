<?php

namespace App\Filament\Resources\FerriesResource\Pages;

use App\Filament\Resources\FerriesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFerries extends EditRecord
{
    protected static string $resource = FerriesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
