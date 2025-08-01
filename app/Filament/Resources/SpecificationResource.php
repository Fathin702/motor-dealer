<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SpecificationResource\Pages;
use App\Filament\Resources\SpecificationResource\RelationManagers;
use App\Models\Specification;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SpecificationResource extends Resource
{
    protected static ?string $model = Specification::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('motor_id')
                    ->numeric(),
                Forms\Components\TextInput::make('engine')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('horsepower')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('torque')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('motor_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('engine')
                    ->searchable(),
                Tables\Columns\TextColumn::make('horsepower')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('torque')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
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
            'index' => Pages\ListSpecifications::route('/'),
            'create' => Pages\CreateSpecification::route('/create'),
            'edit' => Pages\EditSpecification::route('/{record}/edit'),
        ];
    }
}
