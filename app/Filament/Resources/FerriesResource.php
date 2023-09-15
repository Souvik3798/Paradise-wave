<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FerriesResource\Pages;
use App\Filament\Resources\FerriesResource\RelationManagers;
use App\Models\Ferries;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FerriesResource extends Resource
{
    protected static ?string $model = Ferries::class;

    protected static ?string $navigationIcon = 'heroicon-o-ticket';

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                ->disk('public')
                ->directory('cruz')
                ->image()
                ->imageResizeMode('cover')
                ->imageCropAspectRatio('1280:990')
                ->imageResizeTargetWidth('362')
                ->imageResizeTargetHeight('250'),

                TextInput::make('name')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                ->width(100)
                ->height(100),
                TextColumn::make('name')
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListFerries::route('/'),
            'create' => Pages\CreateFerries::route('/create'),
            'edit' => Pages\EditFerries::route('/{record}/edit'),
        ];
    }
}
