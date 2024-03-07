<?php

namespace App\Filament\Resources\HistoryResource\Pages;

use App\Filament\Resources\HistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHistory extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = HistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
