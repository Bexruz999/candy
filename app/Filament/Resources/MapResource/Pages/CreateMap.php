<?php

namespace App\Filament\Resources\MapResource\Pages;

use App\Filament\Resources\MapResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMap extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = MapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
