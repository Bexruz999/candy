<?php

namespace App\Filament\Resources\AdvantageResource\Pages;

use App\Filament\Resources\AdvantageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAdvantage extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = AdvantageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
