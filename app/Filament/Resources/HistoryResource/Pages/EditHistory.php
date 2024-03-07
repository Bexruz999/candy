<?php

namespace App\Filament\Resources\HistoryResource\Pages;

use App\Filament\Resources\HistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHistory extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = HistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
