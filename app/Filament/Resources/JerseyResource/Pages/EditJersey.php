<?php

namespace App\Filament\Resources\JerseyResource\Pages;

use App\Filament\Resources\JerseyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJersey extends EditRecord
{
    protected static string $resource = JerseyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
