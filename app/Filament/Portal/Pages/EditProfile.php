<?php

namespace App\Filament\Portal\Pages;

use Filament\Auth\Pages\EditProfile as BaseEditProfile;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Model;
use SensitiveParameter;
use Filament\Support\Enums\Width;

class EditProfile extends BaseEditProfile
{
    public static function isSimple(): bool
    {
        return false;
    }

    public function getMaxWidth(): Width | string | null
    {
        return Width::SevenExtraLarge;
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Account Information')
                    ->schema([
                        $this->getNameFormComponent(),
                        $this->getEmailFormComponent(),
                    ])->columns(2),

                Section::make('Personal Details')
                    ->schema([
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

                Section::make('Update Password')
                    ->description('Ensure your account is using a long, random password to stay secure.')
                    ->schema([
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),
                        $this->getCurrentPasswordFormComponent(),
                    ]),
            ]);
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $user = $this->getUser();
        $profile = $user->profile;

        if ($profile) {
            $data['phone_no'] = $profile->phone_no;
            $data['date_of_birth'] = $profile->date_of_birth?->format('Y-m-d');
            $data['gender'] = $profile->gender;
            $data['avatar'] = $profile->avatar;
            $data['bio'] = $profile->bio;
            $data['address_line_1'] = $profile->address_line_1;
            $data['address_line_2'] = $profile->address_line_2;
            $data['city'] = $profile->city;
            $data['state'] = $profile->state;
            $data['country'] = $profile->country;
            $data['pincode'] = $profile->pincode;
            $data['education_details'] = $profile->education_details;
            $data['professional_details'] = $profile->professional_details;

            if (is_array($profile->social_links)) {
                $data['linkedin'] = $profile->social_links['linkedin'] ?? null;
                $data['github'] = $profile->social_links['github'] ?? null;
                $data['twitter'] = $profile->social_links['twitter'] ?? null;
                $data['portfolio'] = $profile->social_links['portfolio'] ?? null;
            }
        }

        return $data;
    }

    protected function handleRecordUpdate(Model $record, #[SensitiveParameter] array $data): Model
    {
        $profileData = [
            'phone_no' => $data['phone_no'] ?? null,
            'date_of_birth' => $data['date_of_birth'] ?? null,
            'gender' => $data['gender'] ?? null,
            'avatar' => $data['avatar'] ?? null,
            'bio' => $data['bio'] ?? null,
            'address_line_1' => $data['address_line_1'] ?? null,
            'address_line_2' => $data['address_line_2'] ?? null,
            'city' => $data['city'] ?? null,
            'state' => $data['state'] ?? null,
            'country' => $data['country'] ?? null,
            'pincode' => $data['pincode'] ?? null,
            'education_details' => $data['education_details'] ?? null,
            'professional_details' => $data['professional_details'] ?? null,
            'social_links' => [
                'linkedin' => $data['linkedin'] ?? null,
                'github' => $data['github'] ?? null,
                'twitter' => $data['twitter'] ?? null,
                'portfolio' => $data['portfolio'] ?? null,
            ],
        ];

        unset(
            $data['phone_no'],
            $data['date_of_birth'],
            $data['gender'],
            $data['avatar'],
            $data['bio'],
            $data['address_line_1'],
            $data['address_line_2'],
            $data['city'],
            $data['state'],
            $data['country'],
            $data['pincode'],
            $data['education_details'],
            $data['professional_details'],
            $data['linkedin'],
            $data['github'],
            $data['twitter'],
            $data['portfolio']
        );

        $record = parent::handleRecordUpdate($record, $data);

        $record->profile()->updateOrCreate(
            ['user_id' => $record->id],
            $profileData
        );

        return $record;
    }
}
