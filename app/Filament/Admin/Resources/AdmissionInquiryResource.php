<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AdmissionInquiryResource\Pages;
use App\Models\AdmissionInquiry;
use BackedEnum;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use UnitEnum;

class AdmissionInquiryResource extends Resource
{
    protected static ?string $model = AdmissionInquiry::class;

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static string | UnitEnum | null $navigationGroup = 'Admission';

    protected static ?string $navigationLabel = 'Admission Enquiry';

    protected static ?int $navigationSort = 1;

    protected static ?string $modelLabel = 'Admission Enquiry';

    protected static ?string $pluralModelLabel = 'Admission Enquiries';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('#')
                    ->sortable(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('mobile_number')
                    ->label('Mobile')
                    ->searchable()
                    ->copyable(),

                Tables\Columns\TextColumn::make('interested_course')
                    ->label('Course')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('info'),

                Tables\Columns\TextColumn::make('city')
                    ->label('City')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('state')
                    ->label('State')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('scholarship_status')
                    ->label('Scholarship')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'scholarship' => 'success',
                        'non-scholarship' => 'gray',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => ucfirst($state)),

                Tables\Columns\TextColumn::make('admission_budget')
                    ->label('Budget')
                    ->money('INR')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'contacted' => 'info',
                        'enrolled' => 'success',
                        'rejected' => 'danger',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => ucfirst($state))
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Submitted')
                    ->dateTime('d M Y, h:i A')
                    ->sortable()
                    ->since()
                    ->tooltip(fn ($record) => $record->created_at->format('d M Y, h:i A')),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'contacted' => 'Contacted',
                        'enrolled' => 'Enrolled',
                        'rejected' => 'Rejected',
                    ]),

                Tables\Filters\SelectFilter::make('scholarship_status')
                    ->label('Scholarship')
                    ->options([
                        'scholarship' => 'Scholarship',
                        'non-scholarship' => 'Non-Scholarship',
                    ]),

                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                \Filament\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                \Filament\Actions\BulkActionGroup::make([
                    \Filament\Actions\DeleteBulkAction::make(),
                    \Filament\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Student Information')
                    ->icon('heroicon-o-user')
                    ->schema([
                        TextEntry::make('name')
                            ->label('Full Name')
                            ->weight('bold'),

                        TextEntry::make('mobile_number')
                            ->label('Mobile Number')
                            ->icon('heroicon-o-phone')
                            ->copyable(),

                        TextEntry::make('guardian_mobile_number')
                            ->label('Guardian Mobile')
                            ->icon('heroicon-o-phone')
                            ->copyable()
                            ->placeholder('Not provided'),
                    ])
                    ->columns(3),

                Section::make('Course & Location')
                    ->icon('heroicon-o-academic-cap')
                    ->schema([
                        TextEntry::make('interested_course')
                            ->label('Interested Course')
                            ->badge()
                            ->color('info'),

                        TextEntry::make('city')
                            ->label('City')
                            ->icon('heroicon-o-map-pin'),

                        TextEntry::make('state')
                            ->label('State')
                            ->icon('heroicon-o-map'),
                    ])
                    ->columns(3),

                Section::make('Financial Details')
                    ->icon('heroicon-o-currency-rupee')
                    ->schema([
                        TextEntry::make('scholarship_status')
                            ->label('Scholarship Status')
                            ->badge()
                            ->color(fn (string $state): string => match ($state) {
                                'scholarship' => 'success',
                                'non-scholarship' => 'gray',
                                default => 'gray',
                            })
                            ->formatStateUsing(fn (string $state): string => ucfirst($state)),

                        TextEntry::make('admission_budget')
                            ->label('Admission Budget')
                            ->money('INR')
                            ->placeholder('Not specified'),
                    ])
                    ->columns(2),

                Section::make('Status & Notes')
                    ->icon('heroicon-o-information-circle')
                    ->schema([
                        TextEntry::make('status')
                            ->label('Current Status')
                            ->badge()
                            ->color(fn (string $state): string => match ($state) {
                                'pending' => 'warning',
                                'contacted' => 'info',
                                'enrolled' => 'success',
                                'rejected' => 'danger',
                                default => 'gray',
                            })
                            ->formatStateUsing(fn (string $state): string => ucfirst($state)),

                        TextEntry::make('notes')
                            ->label('Notes')
                            ->placeholder('No notes added')
                            ->columnSpanFull()
                            ->markdown(),
                    ]),

                Section::make('Timestamps')
                    ->icon('heroicon-o-clock')
                    ->schema([
                        TextEntry::make('created_at')
                            ->label('Submitted At')
                            ->dateTime('d M Y, h:i A'),

                        TextEntry::make('updated_at')
                            ->label('Last Updated')
                            ->dateTime('d M Y, h:i A'),
                    ])
                    ->columns(2)
                    ->collapsed(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAdmissionInquiries::route('/'),
            'view' => Pages\ViewAdmissionInquiry::route('/{record}'),
        ];
    }
}
