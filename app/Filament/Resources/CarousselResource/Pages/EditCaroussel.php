<?php

namespace App\Filament\Resources\CarousselResource\Pages;

use App\Filament\Resources\CarousselResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCaroussel extends EditRecord
{
    protected static string $resource = CarousselResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
