<?php

namespace App\Filament\Resources\Components;

use Filament\Forms;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use App\Filament\Resources\Components\CharacterCounter;
use Filament\Schemas\Components\Group;

class SeoSection
{
    public static function make(): Section
    {
        return Section::make('🔍 SEO & Meta Tags')
            ->description('Tối ưu hóa SEO cho website- Giúp Google và mạng xã hội hiểu rõ nội dung, nếu bạn không nhập gì trang sẽ tự lấy nội dung titl, desc để tự seo')
            ->icon('heroicon-o-magnifying-glass')
            ->schema([
                // Meta Tags cơ bản
                Group::make([
                    CharacterCounter::textInput('meta_title', 60)
                        ->label('📝 Meta Title')
                        ->helperText('Tối đa 60 ký tự. Tiêu đề hiển thị trên Google')
                        ->placeholder('VD: Đồng hồ Daniel Wellington Petite Sterling - Chính hãng')
                        ->afterStateUpdated(function ($state, Set $set, $get) {
                            // Chỉ auto-fill nếu og_title đang trống
                            if (empty($get('og_title'))) {
                                $set('og_title', $state);
                            }
                        }),

                    Forms\Components\Textarea::make('meta_description')
                        ->label('📄 Meta Description')
                        ->rows(3)
                        ->maxLength(160)
                        ->helperText('Tối đa 160 ký tự. Mô tả hiển thị dưới tiêu đề trên Google')
                        ->placeholder('VD: Đồng hồ Daniel Wellington Petite Sterling thiết kế tối giản, dây đeo da cao cấp. Bảo hành chính hãng, giao hàng toàn quốc.')
                        ->live(onBlur: true)
                        ->afterStateUpdated(function ($state, Set $set, $get) {
                            // Chỉ auto-fill nếu og_description đang trống
                            if (empty($get('og_description'))) {
                                $set('og_description', $state);
                            }
                        }),
                ])->columns(1),

                Forms\Components\TagsInput::make('meta_keywords')
                    ->label('🏷️ Meta Keywords')
                    ->helperText('Các từ khóa liên quan, phân cách bằng dấu phẩy')
                    ->placeholder('VD: đồng hồ daniel wellington, petite sterling, đồng hồ nữ')
                    ->suggestions([
                        'đồng hồ daniel wellington',
                        'đồng hồ nữ',
                        'đồng hồ nam', 
                        'dây da',
                        'dây kim loại',
                        'chính hãng',
                        'petite sterling',
                        'classic',
                        'trang sức'
                    ]),

                // Open Graph Tags
                Group::make([
                    Forms\Components\TextInput::make('og_title')
                        ->label('📱 Open Graph Title')
                        ->maxLength(60)
                        ->helperText('Tiêu đề khi chia sẻ trên Facebook, LinkedIn')
                        ->placeholder('Nếu để trống sẽ dùng Meta Title'),

                    Forms\Components\Textarea::make('og_description')
                        ->label('📱 Open Graph Description')
                        ->rows(3)
                        ->maxLength(160)
                        ->helperText('Mô tả khi chia sẻ trên Facebook, LinkedIn')
                        ->placeholder('Nếu để trống sẽ dùng Meta Description'),
                ])->columns(1),

                Forms\Components\FileUpload::make('og_image')
                    ->label('🖼️ Open Graph Image')
                    ->image()
                    ->directory('seo/og-images')
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '1.91:1', // Facebook recommended
                    ])
                    ->helperText('Hình ảnh hiển thị khi chia sẻ (1200x630px) - Tỷ lệ 1.91:1')
                    ->maxSize(2048),

                // Cài đặt nâng cao
                Group::make([
                    Forms\Components\TextInput::make('canonical_url')
                        ->label('🔗 Canonical URL')
                        ->url()
                        ->helperText('URL chính thức của trang (nếu để trống sẽ tự động tạo)')
                        ->placeholder('https://example.com/product-name'),

                    Forms\Components\Toggle::make('no_index')
                        ->label('🚫 No Index')
                        ->helperText('Ngăn Google index trang này')
                        ->default(false),

                    Forms\Components\Toggle::make('no_follow')
                        ->label('🚫 No Follow')
                        ->helperText('Ngăn Google follow các link trong trang')
                        ->default(false),
                ])->columns(3),
            ])
            ->columns(1)
            ->collapsible()
            ->collapsed(false) // Mở mặc định để dễ thấy
            ->persistCollapsed()
            ->extraAttributes(['class' => 'seo-section']);
    }
}
