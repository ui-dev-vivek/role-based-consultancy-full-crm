<?php

namespace App\Filament\Portal\Pages;

use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Form as SchemaForm;
use Filament\Schemas\Components\EmbeddedSchema;
use Filament\Schemas\Components\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Components\Section;
use Illuminate\Support\Facades\Auth;
use Filament\Notifications\Notification;

class CompleteProfile extends Page
{
    protected string $view = 'filament-panels::pages.page';

    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-document-text';

    public ?array $data = [];

    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }

    public function mount(): void
    {
        $user = Auth::user();
        if ($user->is_profile_complete) {
            redirect()->to('/portal');
        }

        // Initialize state
        $this->form->fill([
            'full_name' => $user->name,
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->statePath('data')
            ->components([
                Section::make('Role Request')
                    ->description('Admin decides your role. Please select the best fit for you.')
                    ->schema([
                        Select::make('requested_role')
                            ->label('Select Best Fit Role')
                            ->options([
                                'public' => 'Public',
                                'teacher' => 'Teacher',
                                'expert' => 'Expert',
                                'student' => 'Student',
                            ])
                            ->required(),
                    ]),

                Section::make('Personal Details')
                    ->schema([
                        TextInput::make('full_name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('phone_no')
                            ->tel()
                            ->required()
                            ->maxLength(255),
                        DatePicker::make('date_of_birth')
                            ->maxDate(now()),
                        Select::make('gender')
                            ->options([
                                'male' => 'Male',
                                'female' => 'Female',
                                'other' => 'Other',
                            ]),
                        FileUpload::make('avatar')
                            ->image()
                            ->avatar()
                            ->disk('public')
                            ->directory('avatars'),
                        Textarea::make('bio')
                            ->maxLength(500)
                            ->columnSpanFull(),
                    ])->columns(2),

                Section::make('Address Details')
                    ->schema([
                        TextInput::make('address_line_1')
                            ->maxLength(255),
                        TextInput::make('address_line_2')
                            ->maxLength(255),
                        TextInput::make('city')
                            ->maxLength(255),
                        TextInput::make('state')
                            ->maxLength(255),
                        TextInput::make('country')
                            ->maxLength(255),
                        TextInput::make('pincode')
                            ->maxLength(20),
                    ])->columns(2),

                Section::make('Education Details')
                    ->schema([
                        Repeater::make('education_details')
                            ->schema([
                                TextInput::make('qualification')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('e.g. B.Tech / Ph.D'),
                                TextInput::make('institution')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('e.g. Stanford University'),
                                TextInput::make('passing_year')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('e.g. 2020'),
                                TextInput::make('grade')
                                    ->maxLength(255)
                                    ->placeholder('e.g. 8.5 CGPA / 80%'),
                            ])
                            ->columns(2)
                            ->label('Education History')
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['qualification'] ?? null),
                    ]),

                 Section::make('Professional Details')
                    ->schema([
                        Repeater::make('professional_details')
                            ->schema([
                                TextInput::make('designation')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('e.g. Professor / Advisor'),
                                TextInput::make('organization')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('e.g. Tech Corp / University'),
                                TextInput::make('years_experience')
                                    ->numeric()
                                    ->placeholder('e.g. 5'),
                                Textarea::make('description')
                                    ->maxLength(500)
                                    ->columnSpanFull()
                                    ->placeholder('Job description or key responsibilities'),
                            ])
                            ->columns(2)
                            ->label('Professional Experience')
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['designation'] ?? null),
                    ]),

                Section::make('Social Profile Links')
                    ->schema([
                        TextInput::make('linkedin')
                            ->label('LinkedIn Profile URL')
                            ->url()
                            ->placeholder('https://linkedin.com/in/username'),
                        TextInput::make('github')
                            ->label('GitHub Profile URL')
                            ->url()
                            ->placeholder('https://github.com/username'),
                        TextInput::make('twitter')
                            ->label('Twitter / X URL')
                            ->url()
                            ->placeholder('https://x.com/username'),
                        TextInput::make('portfolio')
                            ->label('Portfolio / Website URL')
                            ->url()
                            ->placeholder('https://yourwebsite.com'),
                    ])->columns(2),
            ]);
    }

    public function content(Schema $schema): Schema
    {
        return $schema
            ->components([
                SchemaForm::make([EmbeddedSchema::make('form')])
                    ->id('form')
                    ->livewireSubmitHandler('submit')
                    ->footer([
                        Actions::make([
                            Action::make('submit')
                                ->label('Save Profile & Continue')
                                ->submit('submit')
                                ->color('primary')
                        ])
                        ->alignment('end')
                        ->key('form-actions')
                    ])
            ]);
    }

    public function submit(): void
    {
        $state = $this->form->getState();

        $user = Auth::user();

        // 1. Update user
        $user->update([
            'requested_role' => $state['requested_role'],
            'is_profile_complete' => true,
            'name' => $state['full_name'],
        ]);

        // 2. Create or update profile
        $user->profile()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'full_name' => $state['full_name'],
                'phone_no' => $state['phone_no'],
                'date_of_birth' => $state['date_of_birth'],
                'gender' => $state['gender'],
                'avatar' => $state['avatar'],
                'bio' => $state['bio'],
                'address_line_1' => $state['address_line_1'],
                'address_line_2' => $state['address_line_2'],
                'city' => $state['city'],
                'state' => $state['state'],
                'country' => $state['country'],
                'pincode' => $state['pincode'],
                'education_details' => $state['education_details'] ?? null,
                'professional_details' => $state['professional_details'] ?? null,
                'social_links' => [
                    'linkedin' => $state['linkedin'] ?? null,
                    'github' => $state['github'] ?? null,
                    'twitter' => $state['twitter'] ?? null,
                    'portfolio' => $state['portfolio'] ?? null,
                ],
            ]
        );

        Notification::make()
            ->title('Profile Completed Successfully')
            ->success()
            ->send();

        redirect()->to('/portal');
    }
}
