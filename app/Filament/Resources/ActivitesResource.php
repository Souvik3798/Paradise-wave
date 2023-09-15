<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActivitesResource\Pages;
use App\Filament\Resources\ActivitesResource\RelationManagers;
use App\Models\Activities;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActivitesResource extends Resource
{
    protected static ?string $model = Activities::class;

    protected static ?string $navigationIcon = 'heroicon-o-flag';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->label('Activity Title')
                ->required(),
                FileUpload::make('image')
                ->disk('public')
                ->directory('activities')
                ->image()
                ->imageResizeMode('cover')
                ->imageCropAspectRatio('1280:955')
                ->placeholder(__('Image'))
                ->required(),
                Textarea::make('description')
                ->required(),
                TagsInput::make('tags')
                ->required()
                ->placeholder(_('Activities Tags'))
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListActivites::route('/'),
            'create' => Pages\CreateActivites::route('/create'),
            'edit' => Pages\EditActivites::route('/{record}/edit'),
        ];
    }
}
