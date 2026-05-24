<?php

namespace App\Filament\Admin\Widgets;

use App\Models\AdmissionInquiry;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Carbon\Carbon;

class AdmissionInquiryStatsWidget extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $totalInquiries = AdmissionInquiry::count();
        $todayInquiries = AdmissionInquiry::whereDate('created_at', Carbon::today())->count();
        $pendingInquiries = AdmissionInquiry::where('status', 'pending')->count();

        // Last 7 days trend for sparkline charts
        $last7DaysTotal = collect(range(6, 0))->map(function ($daysAgo) {
            return AdmissionInquiry::whereDate('created_at', Carbon::today()->subDays($daysAgo))->count();
        })->toArray();

        $last7DaysPending = collect(range(6, 0))->map(function ($daysAgo) {
            return AdmissionInquiry::where('status', 'pending')
                ->whereDate('created_at', Carbon::today()->subDays($daysAgo))
                ->count();
        })->toArray();

        return [
            Stat::make('Total Enquiries', $totalInquiries)
                ->description('All time admission enquiries')
                ->descriptionIcon('heroicon-o-clipboard-document-list')
                ->color('primary')
                ->chart($last7DaysTotal),

            Stat::make("Today's Enquiries", $todayInquiries)
                ->description('Received today')
                ->descriptionIcon('heroicon-o-calendar')
                ->color('success')
                ->chart($last7DaysTotal),

            Stat::make('Pending Enquiries', $pendingInquiries)
                ->description('Awaiting response')
                ->descriptionIcon('heroicon-o-clock')
                ->color('warning')
                ->chart($last7DaysPending),
        ];
    }
}
