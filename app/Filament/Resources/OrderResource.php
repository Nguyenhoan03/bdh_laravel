<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
use Filament\Actions\DeleteBulkAction;
use BackedEnum;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Tables;
use Filament\Tables\Table;



class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-shopping-bag';

    protected static ?string $navigationLabel = 'Đơn Hàng';

    protected static ?string $modelLabel = 'Đơn Hàng';

    protected static ?string $pluralModelLabel = 'Đơn Hàng';

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Thông tin đơn hàng')
                    ->schema([
                        Forms\Components\TextInput::make('order_number')
                            ->label('Mã đơn hàng')
                            ->required()
                            ->maxLength(50)
                            ->unique(ignoreRecord: true)
                            ->prefixIcon('heroicon-o-hashtag'),
                        Forms\Components\Select::make('customer_id')
                            ->label('Khách hàng')
                            ->relationship('customer', 'name')
                            ->searchable()
                            ->preload()
                            ->nullable()
                            ->prefixIcon('heroicon-o-user'),
                        Forms\Components\Select::make('status')
                            ->label('Trạng thái')
                            ->options([
                                'pending' => 'Chờ xử lý',
                                'confirmed' => 'Đã xác nhận',
                                'shipped' => 'Đã gửi hàng',
                                'delivered' => 'Đã giao hàng',
                                'cancelled' => 'Đã hủy',
                            ])
                            ->required()
                            ->prefixIcon('heroicon-o-clock'),
                        Forms\Components\TextInput::make('total_amount')
                            ->label('Tổng tiền')
                            ->numeric()
                            ->prefix('₫')
                            ->required(),
                        Forms\Components\TextInput::make('payment_method')
                            ->label('Phương thức thanh toán')
                            ->required()
                            ->maxLength(50),
                    ])->columns(2),

                Section::make('Thông tin khách hàng')
                    ->schema([
                        Forms\Components\TextInput::make('customer_name')
                            ->label('Tên khách hàng')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('customer_phone')
                            ->label('Số điện thoại')
                            ->required()
                            ->maxLength(20),
                        Forms\Components\Textarea::make('customer_address')
                            ->label('Địa chỉ')
                            ->required()
                            ->rows(3),
                        Forms\Components\Textarea::make('notes')
                            ->label('Ghi chú')
                            ->rows(3),
                    ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order_number')
                    ->label('Mã đơn hàng')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('customer_name')
                    ->label('Khách hàng')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('customer_phone')
                    ->label('SĐT')
                    ->searchable(),
                Tables\Columns\TextColumn::make('total_amount')
                    ->label('Tổng tiền')
                    ->money('VND')
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('status')
                    ->label('Trạng thái')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'confirmed' => 'info',
                        'shipped' => 'primary',
                        'delivered' => 'success',
                        'cancelled' => 'danger',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'pending' => 'Chờ xử lý',
                        'confirmed' => 'Đã xác nhận',
                        'shipped' => 'Đã gửi hàng',
                        'delivered' => 'Đã giao hàng',
                        'cancelled' => 'Đã hủy',
                    }),
                Tables\Columns\TextColumn::make('payment_method')
                    ->label('Thanh toán'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ngày tạo')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label('Trạng thái')
                    ->options([
                        'pending' => 'Chờ xử lý',
                        'confirmed' => 'Đã xác nhận',
                        'shipped' => 'Đã gửi hàng',
                        'delivered' => 'Đã giao hàng',
                        'cancelled' => 'Đã hủy',
                    ]),
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'view' => Pages\ViewOrder::route('/{record}'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
