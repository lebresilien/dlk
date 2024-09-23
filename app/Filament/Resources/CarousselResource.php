<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarousselResource\Pages;
use App\Filament\Resources\CarousselResource\RelationManagers;
use App\Models\Caroussel;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarousselResource extends Resource
{
    protected static ?string $model = Caroussel::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('img')
                ->image()
                ->required()
                ->columns(2),
                Forms\Components\Textarea::make('description')
                ->required()
                ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('description')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCaroussels::route('/'),
            'create' => Pages\CreateCaroussel::route('/create'),
            'edit' => Pages\EditCaroussel::route('/{record}/edit'),
        ];
    }
}
