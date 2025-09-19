<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogPostResource\Pages;
use App\Models\BlogPost;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Schemas\Components\Section;
use BackedEnum;
use Filament\Schemas\Components\Utilities\Set;

class BlogPostResource extends Resource
{
    protected static ?string $model = BlogPost::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Blog';

    protected static ?string $modelLabel = 'Bài Viết';

    protected static ?string $pluralModelLabel = 'Bài Viết';

    protected static ?int $navigationSort = 5;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Thông tin bài viết')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Tiêu đề')
                            ->required()
                            ->maxLength(255)
                            ->prefixIcon('heroicon-o-document-text')
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
                        Forms\Components\TextInput::make('author')
                            ->label('Tác giả')
                            ->required()
                            ->maxLength(100)
                            ->prefixIcon('heroicon-o-user'),
                        Forms\Components\Toggle::make('is_published')
                            ->label('Xuất bản')
                            ->onColor('success')
                            ->offColor('danger')
                            ->default(false),
                    ])->columns(2),

                Section::make('Nội dung')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Hình ảnh')
                            ->image()
                            ->directory('blog')
                            ->visibility('public'),
                        Forms\Components\RichEditor::make('content')
                            ->label('Nội dung')
                            ->required()
                            ->columnSpanFull()
                            ->placeholder('Nhập nội dung bài viết...')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'strike',
                                'link',
                                'bulletList',
                                'orderedList',
                                'h1',
                                'h2',
                                'h3',
                                'blockquote',
                                'codeBlock',
                                'attachFiles',
                            ])
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsDirectory('blog/content')
                            ->fileAttachmentsVisibility('public'),
                    ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Hình ảnh')
                    ->circular(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Tiêu đề')
                    ->searchable()
                    ->sortable()
                    ->limit(50)
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('author')
                    ->label('Tác giả')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_published')
                    ->label('Xuất bản')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ngày tạo')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_published')
                    ->label('Xuất bản'),
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
            'index' => Pages\ListBlogPosts::route('/'),
            'create' => Pages\CreateBlogPost::route('/create'),
            'edit' => Pages\EditBlogPost::route('/{record}/edit'),
        ];
    }
}
