<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PackagesResource\Pages;
use App\Filament\Resources\PackagesResource\RelationManagers;
use App\Models\Packages;
use App\Models\Places;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PackagesResource extends Resource
{
    protected static ?string $model = Packages::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive-box';

    protected static ?int $navigationSort = 2;

    //make this 2nd position in the navigation bar
    protected static int $priority = 3;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->autofocus()
                    ->required()
                    ->placeholder(__('Name')),
                Select::make('type')
                    ->label('Package Type')
                    ->placeholder(__('Type Of Package'))
                    ->options([
                        'Family' => 'Family',
                        'Solo' => 'Solo',
                        'Honeymoon' => 'Honeymoon',
                        'Group' => 'Group',
                        'Luxury' => 'Luxury'
                    ])
                    ->required()
                    ->searchable(),
                FileUpload::make('image')
                    ->label('Photo')
                    ->disk('public')
                    ->directory('packages')
                    ->image()
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('18:13')
                    ->imageResizeTargetWidth('360')
                    ->imageResizeTargetHeight('260')
                    ->placeholder(__('Image'))
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->placeholder(__('Description')),
                TextInput::make('price')
                    ->placeholder(__('Price')),
                Repeater::make('days')
                ->schema([
                    Select::make('days')
                    ->label('Day Number')
                    ->placeholder('Day')
                    ->required()
                    ->options(['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20']),
                    TextInput::make('title')
                    ->label('Title')
                    ->placeholder('Title of the day')
                    ->required(),
                    Textarea::make('Description')
                    ->placeholder('Elaborate the Day planning')
                    ->required()
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('type')
                    ->label('Package Type')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('image')
                    ->label('Photo')
                    ->height(100)
                    ->width(100)
                    ->rounded()
                    ->searchable()
                    ->sortable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListPackages::route('/'),
            'create' => Pages\CreatePackages::route('/create'),
            'edit' => Pages\EditPackages::route('/{record}/edit'),
        ];
    }
}
