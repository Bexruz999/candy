<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvantageResource\Pages;
use App\Filament\Resources\AdvantageResource\RelationManagers;
use App\Models\Advantage;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdvantageResource extends Resource
{
    use Translatable;

    protected static ?string $model = Advantage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getPluralLabel(): string
    {
        return __('settings.advantages');
    }

    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                TextInput::make('name')->label(__('settings.name')),
                TextInput::make('title')->label(__('settings.title')),
                TextInput::make('subtitle')->label(__('settings.subtitle')),
                Textarea::make('description')->label(__('settings.description')),
                FileUpload::make('img')->image()->label(__('settings.img'))->directory('advantages'),
                Checkbox::make('status')->label(__('settings.active'))
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('status')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAdvantages::route('/'),
            'create' => Pages\CreateAdvantage::route('/create'),
            'edit' => Pages\EditAdvantage::route('/{record}/edit'),
        ];
    }
}
