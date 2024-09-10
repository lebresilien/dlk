<?php

namespace App\Filament\Resources\PatnerResource\Pages;

use App\Filament\Resources\PatnerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPatner extends EditRecord
{
    protected static string $resource = PatnerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
