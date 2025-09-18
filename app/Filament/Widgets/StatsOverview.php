<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Contact;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Tổng sản phẩm', Product::count())
                ->description('Sản phẩm trong hệ thống')
                ->color('success'),
            
            Stat::make('Đơn hàng hôm nay', Order::whereDate('created_at', today())->count())
                ->description('Đơn hàng mới hôm nay')
                ->color('info'),
            
            Stat::make('Tổng khách hàng', Customer::count())
                ->description('Khách hàng đã đăng ký')
                ->color('warning'),
            
            Stat::make('Tin nhắn mới', Contact::where('status', 'new')->count())
                ->description('Tin nhắn chưa đọc')
                ->color('danger'),
        ];
    }
}
