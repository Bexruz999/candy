<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Category;
use App\Models\CustomField;
use App\Models\Product;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    use Translatable;

    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getPluralLabel(): string
    {
        return __('settings.products');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('name')->required(),

                TextInput::make('title'),

                Select::make('category_id')->options(
                    Category::select(['name', 'id'])
                        ->pluck('name', 'id')
                ),

                Textarea::make('description'),

                FileUpload::make('file')->openable()
                    ->label(__('settings.katalog'))
                    ->directory('/katalog'),

                FileUpload::make('img')
                    ->image()->openable()
                    ->label(__('settings.kartinka'))
                    ->directory('/product-main'),

                FileUpload::make('img360')
                    ->image()
                    ->label(__('settings.vid'))
                    ->multiple()->directory(fn ($record) => '/img360/' . Str::slug($record->name))
                    ->preserveFilenames(),

                FileUpload::make('outerimg360')
                    ->image()->label(__('settings.vneshniy-vid'))
                    ->multiple()
                    ->directory(fn ($record) => '/outer_img360/' . Str::slug($record->name))
                    ->preserveFilenames(),

                KeyValue::make('options')
                    ->label(__('settings.options'))
                    ->reorderable()
                    ->keyLabel('test'),

                Repeater::make('custom_fields')
                    ->label(__('settings.custom'))
                    ->schema([
                        Select::make('icon')
                            ->options(CustomField::select(['name', 'id'])
                                ->pluck('name', 'id')),

                        TextInput::make('text')
                    ]),

                Checkbox::make('status')->label(__('settings.active')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('img'),
                TextColumn::make('category.name'),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
