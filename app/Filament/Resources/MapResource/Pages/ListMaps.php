<?php

namespace App\Filament\Resources\MapResource\Pages;

use App\Filament\Resources\MapResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMaps extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = MapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
