<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BatmanResource\Pages;
use App\Filament\Resources\BatmanResource\RelationManagers;
use App\Models\Batman;
use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class BatmanResource extends Resource
{
    protected static ?string $model = Batman::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
    protected static ?string $navigationLabel = 'Batman Pre-orders';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('email'),
                TextInput::make('number'),
                TextInput::make('back_name'),
                TextInput::make('address'),
                TextInput::make('city'),
                TextInput::make('size'),
                TextInput::make('sleeve'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('email')->searchable()->sortable(),
                TextColumn::make('number')->searchable()->sortable(),
                TextColumn::make('back_name')->label('Print name')->searchable()->sortable(),
                TextColumn::make('address')->searchable()->sortable(),
                TextColumn::make('city')->searchable()->sortable(),
                TextColumn::make('size')->searchable()->sortable(),
                TextColumn::make('jersey')->searchable()->sortable(),
                TextColumn::make('sleeve')->searchable()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                // ExportAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
                ExportBulkAction::make(),
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
            'index' => Pages\ListBatmen::route('/'),
            'create' => Pages\CreateBatman::route('/create'),
            'edit' => Pages\EditBatman::route('/{record}/edit'),
        ];
    }
}
