<?php

namespace App\Filament\Resources\JerseyResource\Pages;

use App\Filament\Resources\JerseyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJerseys extends ListRecords
{
    protected static string $resource = JerseyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
