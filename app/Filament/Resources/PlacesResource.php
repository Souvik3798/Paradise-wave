<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlacesResource\Pages;
use App\Filament\Resources\PlacesResource\RelationManagers;
use App\Models\Places;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PlacesResource extends Resource
{
    protected static ?string $model = Places::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    TextInput::make('name')
                    ->required()
                    ->live()
                    ->afterStateUpdated(function(string $operation, $state, Forms\Set $set){
                        if($operation !== 'create' && $operation!=='edit'){
                            return;
                        }
                        $set('slug', Str::slug($state));
                    })
                    ->placeholder(__('Name')),
                    TextInput::make('slug')
                    ->required()
                    ->disabled()
                    ->dehydrated()
                    ->placeholder(__('Slug')),
                    FileUpload::make('image')
                    ->label('Photo')
                    ->disk('public')
                    ->directory('places')
                    ->image()
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('1280:1280')
                    ->placeholder(__('Thumbnail'))
                    ->required(),
                    Textarea::make('description')
                    ->required()
                    ->placeholder(_('Description and features about the place'))
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('slug')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPlaces::route('/'),
            'create' => Pages\CreatePlaces::route('/create'),
            'edit' => Pages\EditPlaces::route('/{record}/edit'),
        ];
    }
}
