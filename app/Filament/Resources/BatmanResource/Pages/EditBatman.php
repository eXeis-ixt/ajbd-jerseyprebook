<?php

namespace App\Filament\Resources\BatmanResource\Pages;

use App\Filament\Resources\BatmanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBatman extends EditRecord
{
    protected static string $resource = BatmanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
