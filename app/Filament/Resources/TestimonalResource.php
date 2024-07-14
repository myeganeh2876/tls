<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonalResource\Pages;
use App\Filament\Resources\TestimonalResource\RelationManagers;
use App\Models\Testimonal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestimonalResource extends Resource
{
    protected static ?string $model = Testimonal::class;

    protected static ?string $navigationIcon = 'iconoir-user-love';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('comment')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('client_name')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(60),
                Forms\Components\TextInput::make('client_company')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(60),
                Forms\Components\Select::make("project_id")
                    ->relationship('project', 'title')
                    ->label('Project'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('comment'),
                Tables\Columns\TextColumn::make('client_name'),
                Tables\Columns\TextColumn::make('client_company')
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
            'index' => Pages\ListTestimonals::route('/'),
            'create' => Pages\CreateTestimonal::route('/create'),
            'edit' => Pages\EditTestimonal::route('/{record}/edit'),
        ];
    }
}
