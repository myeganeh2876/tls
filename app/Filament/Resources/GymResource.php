<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GymResource\Pages;
use App\Filament\Resources\GymResource\RelationManagers;
use App\Models\Gym;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use GalleryJsonMedia\Form\JsonMediaGallery;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class GymResource extends Resource
{
    protected static ?string $model = Gym::class;

    protected static ?string $navigationIcon = 'iconoir-gym';

    protected static ?string $modelLabel = 'باشگاه';
    protected static ?string $pluralModelLabel = 'باشگاه ها';

    protected static ?int $navigationSort = 0;
    protected static ?string $navigationGroup = 'باشگاه';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                JsonMediaGallery::make('images')
                    ->label('تصاویر باشگاه')
                    ->hint('تصویر اول عکس اصلی میشه')
                    ->directory('page')
                    ->reorderable()
                    ->preserveFilenames()
                    ->maxSize(4 * 1024)
                    ->replaceNameByTitle() // If you want to show title (alt customProperties) against file name
                    ->image() // only images by default , u need to choose one (images or document)
                    ->downloadable()
                    ->deletable(),

                Forms\Components\Split::make([
                    Forms\Components\Section::make('اطلاعات کلی')->schema([
                        Forms\Components\TextInput::make("title")
                            ->label('عنوان')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                                if ($operation !== 'create') {
                                    return;
                                }
                                $set('slug', Str::slug($state));
                            }),
                        Forms\Components\TextInput::make("slug")
                            ->label('اسلاگ')
                            ->required(),
                        Forms\Components\Textarea::make('description')
                            ->label('توضیحات')
                            ->required()
                            ->maxLength(600),
                        Forms\Components\Group::make([
                            Forms\Components\TextInput::make("seo_title")
                                ->label('عنوان سئو')
                                ->required()
                                ->maxLength(255)
                            ,
                            Forms\Components\Textarea::make('seo_description')
                                ->required()
                                ->label('توضیحات سئو')
                                ->maxLength(600)
                        ]),
                        Forms\Components\CheckboxList::make("features")
                            ->relationship('features', 'title')
                            ->searchable()
                            ->label('امکانات')
                        ,
                        Forms\Components\CheckboxList::make("fields")
                            ->relationship('fields', 'title')
                            ->searchable()
                            ->label('رشته ها')
                    ]),
                    Forms\Components\Section::make('اطلاعات باشگاه')->schema([
                        Forms\Components\Toggle::make("open")
                            ->label('باشگاه باز است')->required(),
                        Forms\Components\Toggle::make("visible")
                            ->label('باشگاه دیده شود')->required(),
                        Forms\Components\Select::make("type")
                            ->label('نوع باشگاه')->options([
                                'male_only' => 'مخصوص آقایان',
                                'female_only' => 'مخصوص بانوان',
                                'both' => 'هردو',
                            ]),
                        Forms\Components\Select::make("package_id")
                            ->relationship('package', 'title')
                            ->label('پکیج'),
                        Forms\Components\Select::make("city_id")
                            ->relationship('city', 'title')
                            ->label('شهر')
                            ->live(),
                        Forms\Components\Select::make("district_id")
                            ->relationship('district', 'title', modifyQueryUsing: function (Builder $query, callable $get) {
                                $query->where('city_id', $get('city_id'));
                            })
                            ->label('محله')
                            ->disabled(fn(Get $get) => $get('city_id') == null),

                        Forms\Components\Textarea::make('address')
                            ->label('آدرس')
                            ->required(),
                        Forms\Components\TextInput::make("location")
                            ->label('موقعیت')
                            ->required(),

                    ])


                ])
                    ->from('md')
                    ->columnSpanFull()


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("title")
                    ->label('عنوان'),
                Tables\Columns\ToggleColumn::make("open")
                    ->label('باز'),
                Tables\Columns\ToggleColumn::make("visible")
                    ->label('دیده شود'),
                Tables\Columns\TextColumn::make("city.title")
                    ->label('شهر'),

                Tables\Columns\TextColumn::make("district.title")
                    ->label('محله')


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
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGyms::route('/'),
            'create' => Pages\CreateGym::route('/create'),
            'edit' => Pages\EditGym::route('/{record}/edit'),
        ];
    }
}
