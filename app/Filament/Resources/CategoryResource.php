<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->live()
                    ->required()->minLength(2)->maxLength(150)
                    // Automatically generates and sets the 'slug' field based on the title's state
                    // The slug is created by converting the title to a URL-friendly format
                    ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {

                        // Only generate the slug if the operation is 'create' (not 'edit')
                        // This prevents overwriting an existing slug when editing a title
                        if ($operation === 'edit') {
                            return;
                        }
                        // Convert the current title ($state) into a slug format (lowercase, hyphenated)
                        // and set it to the 'slug' field
                        $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')->required()->minLength(2)->maxLength(150)->unique(ignoreRecord: true),
                TextInput::make('text_colour')->nullable(),
                TextInput::make('bg_colour')->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('slug')->sortable()->searchable(),
                TextColumn::make('text_colour')->sortable()->searchable(),
                TextColumn::make('bg_colour')->sortable()->searchable(),
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
