<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\Components\SeoSection;
use App\Models\Category;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use BackedEnum;
use Filament\Actions\EditAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Schemas\Components\Utilities\Set;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-tag';

    protected static ?string $navigationLabel = 'Danh Mục';

    protected static ?string $modelLabel = 'Danh Mục';

    protected static ?string $pluralModelLabel = 'Danh Mục';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Thông tin danh mục')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Tên danh mục')
                            ->required()
                            ->maxLength(100)
                            ->prefixIcon('heroicon-o-tag')
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, Set $set) {
                                $set('slug', \Illuminate\Support\Str::slug($state));
                            }),
                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(100)
                            ->unique(ignoreRecord: true)
                            ->prefixIcon('heroicon-o-link')
                            ->rules([
                                function () {
                                    return function (string $attribute, $value, \Closure $fail) {
                                        if (empty($value)) return;
                                        
                                        $slug = \Illuminate\Support\Str::slug($value);
                                        if ($slug !== $value) {
                                            $fail('Slug chỉ được chứa chữ cái, số và dấu gạch ngang.');
                                        }
                                    };
                                },
                            ]),
                        Forms\Components\Textarea::make('description')
                            ->label('Mô tả')
                            ->rows(3)
                            ->placeholder('Nhập mô tả cho danh mục...'),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Kích hoạt')
                            ->default(true)
                            ->helperText('Danh mục sẽ hiển thị trên website khi được kích hoạt'),
                        Forms\Components\FileUpload::make('image')
                            ->label('Hình ảnh')
                            ->image()
                            ->directory('categories')
                            ->visibility('public'),
                    ])
                    ->columns(2),

                SeoSection::make(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Hình ảnh')
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Tên danh mục')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Trạng thái')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),
                Tables\Columns\IconColumn::make('meta_title')
                    ->label('SEO')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('gray')
                    ->getStateUsing(fn ($record) => !empty($record->meta_title) || !empty($record->meta_description)),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ngày tạo')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Trạng thái kích hoạt')
                    ->placeholder('Tất cả')
                    ->trueLabel('Đã kích hoạt')
                    ->falseLabel('Chưa kích hoạt'),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
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
