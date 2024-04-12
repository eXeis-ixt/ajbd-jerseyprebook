<?php

namespace App\Filament\Resources\BatmanResource\Pages;

use App\Filament\Resources\BatmanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBatmen extends ListRecords
{
    protected static string $resource = BatmanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
