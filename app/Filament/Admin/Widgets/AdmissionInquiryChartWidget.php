<?php

namespace App\Filament\Admin\Widgets;

use App\Models\AdmissionInquiry;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class AdmissionInquiryChartWidget extends ChartWidget
{
    protected static ?int $sort = 2;

    protected ?string $heading = 'Last 7 Days - Admission Enquiries';

    protected string $color = 'primary';

    protected ?string $maxHeight = '300px';

    protected function getData(): array
    {
        $days = collect(range(6, 0))->map(function ($daysAgo) {
            $date = Carbon::today()->subDays($daysAgo);

            return [
                'label' => $date->format('d M'),
                'count' => AdmissionInquiry::whereDate('created_at', $date)->count(),
            ];
        });

        return [
            'datasets' => [
                [
                    'label' => 'Enquiries',
                    'data' => $days->pluck('count')->toArray(),
                    'backgroundColor' => 'rgba(251, 191, 36, 0.2)',
                    'borderColor' => 'rgb(251, 191, 36)',
                    'borderWidth' => 2,
                    'tension' => 0.4,
                    'fill' => true,
                    'pointBackgroundColor' => 'rgb(251, 191, 36)',
                    'pointRadius' => 4,
                    'pointHoverRadius' => 6,
                ],
            ],
            'labels' => $days->pluck('label')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
