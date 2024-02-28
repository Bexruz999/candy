<?php

namespace App\Filament\Resources\SpecializationResource\Pages;

use App\Filament\Resources\SpecializationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpecializations extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = SpecializationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
