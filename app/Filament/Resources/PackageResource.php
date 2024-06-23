<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PackageResource\Pages;
use App\Filament\Resources\PackageResource\RelationManagers;
use App\Models\Package;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Infolists\Components\ImageEntry;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PackageResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static ?string $navigationIcon = 'iconoir-box-iso';
    protected static ?string $navigationGroup = 'اطلاعات';

    protected static ?string $modelLabel = 'پکیج';
    protected static ?string $pluralModelLabel = 'پکیج ها';
    protected static ?int $navigationSort = 2;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Split::make([
                    Forms\Components\Section::make([
                        Forms\Components\TextInput::make("title")
                            ->required()->maxLength(100)->label('عنوان'),
                        Forms\Components\TextInput::make("days")
                            ->numeric()->required()->label('تعداد روز'),
                        Forms\Components\TextInput::make("price")
                            ->required()->numeric()->label('قیمت'),
                        Forms\Components\TextInput::make("discount_price")
                            ->numeric()->label('قیمت قبل از تخفیف'),

                    ])->grow(true),
                    Forms\Components\Section::make([
                        Forms\Components\Toggle::make("recommended")->label('پیشنهاد شده'),
                        Forms\Components\FileUpload::make('logo')
                            ->directory('packages')
                            ->imageEditor()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('1:1')
                            ->required()->label('تصویر پکیج'),
                        Forms\Components\ColorPicker::make("color")->required()->label('رنگ پکیج'),
                    ])->grow(false)
                ])
                    ->from('md')
                    ->columnSpanFull()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make("logo")->label('تصویر پکیج'),
                Tables\Columns\TextColumn::make("title")->label('عنوان')->searchable()->sortable(),
                Tables\Columns\TextColumn::make("days")->label('تعداد روز'),
                Tables\Columns\TextColumn::make("price")->label('قیمت'),
                Tables\Columns\ColorColumn::make("color")->label('رنگ پکیج'),

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
            'index' => Pages\ListPackages::route('/'),
            'create' => Pages\CreatePackage::route('/create'),
            'edit' => Pages\EditPackage::route('/{record}/edit'),
        ];
    }
}
