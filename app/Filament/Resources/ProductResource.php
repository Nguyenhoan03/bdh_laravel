<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
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

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-cube';

    protected static ?string $navigationLabel = 'Sản Phẩm';

    protected static ?string $modelLabel = 'Sản Phẩm';

    protected static ?string $pluralModelLabel = 'Sản Phẩm';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Thông tin cơ bản')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Tên sản phẩm')
                            ->required()
                            ->maxLength(255)
                            ->prefixIcon('heroicon-o-cube')
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $operation, $state, Set $set) {
                                $set('slug', \Illuminate\Support\Str::slug($state));
                            }),
                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(255)
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
                        Forms\Components\Select::make('category_id')
                            ->label('Danh mục')
                            ->options(Category::all()->pluck('name', 'id'))
                            ->required()
                            ->searchable()
                            ->prefixIcon('heroicon-o-tag'),
                    ])->columns(3),

                Section::make('Mô tả sản phẩm')
                    ->schema([
                        Forms\Components\RichEditor::make('description')
                            ->label('Mô tả chi tiết')
                            ->placeholder('Nhập mô tả chi tiết cho sản phẩm...')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'strike',
                                'link',
                                'bulletList',
                                'orderedList',
                                'h2',
                                'h3',
                                'blockquote',
                                'codeBlock',
                                'attachFiles',
                            ])
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsDirectory('products/descriptions')
                            ->fileAttachmentsVisibility('public')
                            ->columnSpanFull(),
                    ]),

                Section::make('Giá và tồn kho')
                    ->schema([
                        Forms\Components\TextInput::make('price')
                            ->label('Giá gốc')
                            ->numeric()
                            ->prefix('₫')
                            ->required()
                            ->prefixIcon('heroicon-o-banknotes'),
                        Forms\Components\TextInput::make('sale_price')
                            ->label('Giá khuyến mãi')
                            ->numeric()
                            ->prefix('₫')
                            ->prefixIcon('heroicon-o-tag'),
                        Forms\Components\TextInput::make('stock')
                            ->label('Tồn kho')
                            ->numeric()
                            ->default(0)
                            ->required()
                            ->prefixIcon('heroicon-o-archive-box'),
                    ])->columns(3)
                    ->collapsible(),

                Section::make('Hình ảnh và trạng thái')
                    ->schema([
                        Forms\Components\FileUpload::make('images')
                            ->label('Hình ảnh sản phẩm')
                            ->multiple()
                            ->image()
                            ->directory('products')
                            ->visibility('public')
                            ->reorderable()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->columnSpanFull(),
                        Forms\Components\Toggle::make('is_featured')
                            ->label('Sản phẩm nổi bật')
                            ->onColor('success')
                            ->offColor('danger')
                            ->default(false),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Kích hoạt')
                            ->onColor('success')
                            ->offColor('danger')
                            ->default(true),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('images')
                    ->label('Hình ảnh')
                    ->circular()
                    ->stacked(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Tên sản phẩm')
                    ->searchable()
                    ->sortable()
                    ->limit(30)
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Danh mục')
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Giá gốc')
                    ->money('VND')
                    ->sortable(),
                Tables\Columns\TextColumn::make('sale_price')
                    ->label('Giá KM')
                    ->money('VND')
                    ->sortable(),
                Tables\Columns\TextColumn::make('stock')
                    ->label('Tồn kho')
                    ->sortable()
                    ->badge()
                    ->color(fn(int $state): string => match (true) {
                        $state <= 0 => 'danger',
                        $state <= 10 => 'warning',
                        default => 'success',
                    })
                    ->formatStateUsing(fn(int $state): string => $state . ' sản phẩm'),
                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Nổi bật')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Kích hoạt')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ngày tạo')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category_id')
                    ->label('Danh mục')
                    ->options(Category::all()->pluck('name', 'id')),
                Tables\Filters\TernaryFilter::make('is_featured')
                    ->label('Sản phẩm nổi bật'),
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Kích hoạt'),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
