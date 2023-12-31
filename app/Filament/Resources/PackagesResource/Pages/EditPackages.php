<?php

namespace App\Filament\Resources\PackagesResource\Pages;

use App\Filament\Resources\PackagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPackages extends EditRecord
{
    protected static string $resource = PackagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
