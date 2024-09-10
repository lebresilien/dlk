<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PatnerResource\Pages;
use App\Filament\Resources\PatnerResource\RelationManagers;
use App\Models\Patner;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PatnerResource extends Resource
{
    protected static ?string $model = Patner::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->autofocus()
                    ->unique(ignoreRecord: true)
                    ->required(),
                Forms\Components\FileUpload::make('img')
                    ->label('Logo du partenaire')
                    ->image()
                    ->placeholder('Logo du partenaire')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nom'),
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
            'index' => Pages\ListPatners::route('/'),
            'create' => Pages\CreatePatner::route('/create'),
            'edit' => Pages\EditPatner::route('/{record}/edit'),
        ];
    }
}
