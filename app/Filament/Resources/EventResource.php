<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Event;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EventResource extends Resource
{
    use Translatable;

    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('name')->label(__('settings.name')),

                TextInput::make('title')->label(__('settings.title')),

                Textarea::make('short_desc')->label(__('settings.short_desc')),

                RichEditor::make('description')->label(__('settings.description')),

                FileUpload::make('img')
                    ->image()
                    ->openable()
                    ->label(__('settings.img'))
                    ->directory('/new_img'),

                FileUpload::make('file')
                    ->openable()
                    ->label(__('settings.video_img'))
                    ->directory('/new_vide'),

                FileUpload::make('foto')
                    ->image()
                    ->openable()
                    ->label(__('settings.foto'))
                    ->directory('/new_foto'),

                TextInput::make('date')
                    ->label(__('settings.date')),

                Checkbox::make('visible')
                    ->label(__('settings.visible')),

                TextInput::make('order')
                    ->numeric()
                    ->label(__('settings.order')),

                Checkbox::make('status')
                    ->label(__('settings.active')),
            ]);
    }

    public static function getPluralLabel(): string
    {
        return __('settings.event');
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('img'),
                TextColumn::make('name'),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }

}
