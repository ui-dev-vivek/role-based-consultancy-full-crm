<?php

namespace App\Filament\Admin\Widgets;

use App\Filament\Admin\Resources\AdmissionInquiryResource;
use App\Models\AdmissionInquiry;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

class LatestAdmissionInquiriesWidget extends TableWidget
{
    protected static ?int $sort = 3;

    protected int | string | array $columnSpan = 'full';

    protected function getTableHeading(): ?string
    {
        return 'Latest 5 Admission Enquiries';
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(
                AdmissionInquiry::query()
                    ->latest()
                    ->limit(5)
            )
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->weight('bold')
                    ->searchable(),

                TextColumn::make('mobile_number')
                    ->label('Mobile')
                    ->copyable(),

                TextColumn::make('interested_course')
                    ->label('Course')
                    ->badge()
                    ->color('info'),

                TextColumn::make('city')
                    ->label('City'),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'contacted' => 'info',
                        'enrolled' => 'success',
                        'rejected' => 'danger',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => ucfirst($state)),

                TextColumn::make('created_at')
                    ->label('Submitted')
                    ->since()
                    ->tooltip(fn ($record) => $record->created_at->format('d M Y, h:i A')),
            ])
            ->recordAction(null)
            ->recordUrl(fn (AdmissionInquiry $record): string =>
                AdmissionInquiryResource::getUrl('view', ['record' => $record])
            )
            ->paginated(false);
    }
}
