<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VacancyResource\Pages;
use App\Filament\Resources\VacancyResource\RelationManagers;
use App\Models\Specialization;
use App\Models\Vacancy;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
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

class VacancyResource extends Resource
{
    use Translatable;

    protected static ?string $model = Vacancy::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getPluralLabel(): string
    {
        return __('settings.vacancy');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('title'),
                Forms\Components\Select::make('specialization_id')->options(
                    Specialization::select(['name', 'id'])->pluck('name', 'id')
                ),
                Textarea::make('responsibility'),
                Textarea::make('requirement'),
                Textarea::make('conditions'),
                Checkbox::make('status')->label(__('settings.active')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label(__('settings.name')),
                TextColumn::make('specialization.name')
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
            'index' => Pages\ListVacancies::route('/'),
            'create' => Pages\CreateVacancy::route('/create'),
            'edit' => Pages\EditVacancy::route('/{record}/edit'),
        ];
    }
}
