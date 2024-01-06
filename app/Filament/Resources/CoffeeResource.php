<?php

namespace App\Filament\Resources;

use App\Enums\Coffee\CoffeeAcidity;
use App\Enums\Coffee\CoffeeBitterness;
use App\Enums\Coffee\CoffeeDensity;
use App\Enums\Coffee\CoffeeFormat;
use App\Enums\Coffee\CoffeeRoasting;
use App\Enums\Coffee\CoffeeType;
use App\Filament\Resources\CoffeeResource\Pages\CreateCoffee;
use App\Filament\Resources\CoffeeResource\Pages\EditCoffee;
use App\Filament\Resources\CoffeeResource\Pages\ListCoffees;
use App\Models\Coffee;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class CoffeeResource extends Resource
{
    protected static ?string $model = Coffee::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([
                        Section::make(__('General information'))
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                Select::make('brand_id')
                                    ->relationship('brand', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->required(),
                                RichEditor::make('description')
                                    ->columnSpanFull(),
                            ])->columns(2),
                        Section::make(__('Photos'))->schema([
                            SpatieMediaLibraryFileUpload::make('photos')
                                ->collection('photos')
                                ->reorderable()
                                ->hiddenLabel()
                                ->multiple(),
                        ]),
                        Section::make(__('Coffee details'))->schema([
                            Select::make('country_id')
                                ->label(__('Country of origin'))
                                ->relationship('country', 'name')
                                ->required(),
                            Select::make('type')
                                ->options(CoffeeType::class),
                            Select::make('roasting')
                                ->options(CoffeeRoasting::class),
                            Checkbox::make('no_caffeine')
                                ->label(__('Caffeine free'))->columnSpanFull(),
                            Fieldset::make()->schema([
                                CheckboxList::make('format')
                                    ->options(CoffeeFormat::class)
                                    ->required()
                                    ->columns(3)
                                    ->columnSpanFull(),
                            ]),

                        ])->columns(2),

                        Section::make(__('Flavor details'))->schema([
                            Fieldset::make()->schema([
                                Select::make('density')
                                    ->options(CoffeeDensity::class),
                                Select::make('acidity')
                                    ->options(CoffeeAcidity::class),
                                Select::make('bitterness')
                                    ->options(CoffeeBitterness::class),
                            ])
                                ->columns(3)
                                ->columnSpanFull(),
                            Select::make('flavors')
                                ->relationship('flavors', 'name')
                                ->preload()
                                ->createOptionForm([
                                    TextInput::make('name')
                                        ->required(),
                                ])
                                ->multiple()
                                ->columnSpanFull(),
                            TextInput::make('sca_grade')
                                ->numeric(),
                        ])->columns(2),
                        Section::make()->schema([
                            TextInput::make('price')
                                ->numeric()
                                ->prefix('₽'),
                        ])->columns(2),
                    ])
                    ->columnSpan(['lg' => 2]),
                Group::make()
                    ->schema([
                        Section::make(__('Status'))->schema([
                            Toggle::make('published')
                                ->label(__('Published'))
                                ->onColor('success')
                                ->offColor('danger')
                                ->default(true),
                        ]),
                    ])
                    ->columnSpan(['lg' => 1]),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('photos')
                    ->collection('photos')
                    ->label(__('Photo'))
                    ->limit(1)
                    ->circular()
                    ->width(60)
                    ->height(60),
                TextColumn::make('name')
                    ->limit(15)
                    ->sortable()
                    ->searchable(),
                TextColumn::make('brand.name')
                    ->numeric()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('country.name')
                    ->numeric()
                    ->limit(15),
                TextColumn::make('type'),
                TextColumn::make('format')
                    ->listWithLineBreaks()
                    ->bulleted()
                    ->formatStateUsing(fn (string $state): string => CoffeeFormat::from($state)->getLabel()),
                TextColumn::make('roasting'),
                TextColumn::make('price')
                    ->money('RUB')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->options(CoffeeType::class),
                SelectFilter::make('roasting')
                    ->multiple()
                    ->options(CoffeeRoasting::class),
            ], layout: FiltersLayout::AboveContent)
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->deferLoading()
            ->defaultSort('updated_at', 'desc');
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
            'index' => ListCoffees::route('/'),
            'create' => CreateCoffee::route('/create'),
            'edit' => EditCoffee::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

}
