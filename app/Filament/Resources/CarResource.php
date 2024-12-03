<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Filament\Resources\CarResource\RelationManagers;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use \App\Filament\Widgets\CarsCount;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                ->relationship('user', 'name')
                ->required(),
                Forms\Components\Select::make('employer_id')
                ->relationship('employer', 'name')
                ->required(),
                Forms\Components\TextInput::make('car_name')
                    ->required(),
                Forms\Components\DatePicker::make('created_at')
                    ->disabled()
                    ->default(now()->toDateString())
                    ->label('Creation date'),
                Forms\Components\Select::make('state_id')
                    ->relationship('state', 'label')
                    ->required()
                    ->visibleOn('edit')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('car_name')->label('Car Name'),
                Tables\Columns\TextColumn::make('employer.name')->label('Employer'),
                Tables\Columns\TextColumn::make('created_at')->label('Creation Date')->date(),
                Tables\Columns\TextColumn::make('state_id')->label('Status'),

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
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            \App\Filament\Resources\CarResource\Widgets\CarsCount::class,
        ];
    }
    
}
