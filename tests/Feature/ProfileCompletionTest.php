<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Role;
use Filament\Auth\Pages\Register;
use App\Filament\Portal\Pages\CompleteProfile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ProfileCompletionTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        
        // Seed the database to set up roles and permissions
        $this->seed();
    }

    public function test_user_is_assigned_public_role_upon_registration(): void
    {
        Livewire::test(\App\Filament\Portal\Pages\Auth\Register::class)
            ->fillForm([
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => 'password123',
                'passwordConfirmation' => 'password123',
            ])
            ->call('register')
            ->assertHasNoErrors();

        $user = User::where('email', 'john.doe@example.com')->first();
        
        $this->assertNotNull($user);
        $this->assertTrue($user->hasRole('public'), 'Newly registered user does not have public role assigned.');
        $this->assertFalse($user->is_profile_complete, 'Newly registered user should not have a complete profile.');
    }

    public function test_user_with_incomplete_profile_is_redirected_to_complete_profile_page(): void
    {
        $user = User::factory()->create([
            'is_profile_complete' => false,
        ]);
        $user->assignRole('public');
        $user = $user->fresh();

        // Access the portal main page, it should redirect to Complete Profile
        $response = $this->actingAs($user)->get('/portal');
        $response->assertRedirect(route('filament.portal.pages.complete-profile'));
    }

    public function test_user_can_access_complete_profile_page(): void
    {
        $user = User::factory()->create([
            'is_profile_complete' => false,
        ]);
        $user->assignRole('public');
        $user = $user->fresh();

        $response = $this->actingAs($user)->get('/portal/complete-profile');
        $response->assertSuccessful();
    }

    public function test_user_can_submit_complete_profile_form(): void
    {
        $user = User::factory()->create([
            'is_profile_complete' => false,
        ]);
        $user->assignRole('public');
        $user = $user->fresh();

        Livewire::actingAs($user)
            ->test(CompleteProfile::class)
            ->fillForm([
                'requested_role' => 'teacher',
                'full_name' => 'John Teacher',
                'phone_no' => '1234567890',
                'date_of_birth' => '1990-05-15',
                'gender' => 'male',
                'bio' => 'An experienced math teacher.',
                'address_line_1' => '123 Main St',
                'city' => 'New York',
                'state' => 'NY',
                'country' => 'USA',
                'pincode' => '10001',
                'education_details' => [
                    [
                        'qualification' => 'Master of Science',
                        'institution' => 'MIT',
                        'passing_year' => '2015',
                        'grade' => 'A+',
                    ]
                ],
                'professional_details' => [
                    [
                        'designation' => 'Math Teacher',
                        'organization' => 'Boston High',
                        'years_experience' => 5,
                        'description' => 'Taught Calculus and Algebra',
                    ]
                ],
                'linkedin' => 'https://linkedin.com/in/johnteacher',
                'github' => 'https://github.com/johnteacher',
            ])
            ->call('submit')
            ->assertHasNoErrors();

        $user->refresh();

        $this->assertTrue($user->is_profile_complete, 'User profile complete status was not set to true.');
        $this->assertEquals('teacher', $user->requested_role);
        $this->assertEquals('John Teacher', $user->name);

        $profile = $user->profile;
        $this->assertNotNull($profile, 'UserProfile was not created.');
        $this->assertEquals('John Teacher', $profile->full_name);
        $this->assertEquals('1234567890', $profile->phone_no);
        $this->assertEquals('New York', $profile->city);
        $this->assertEquals('USA', $profile->country);
        $this->assertIsArray($profile->education_details);
        $this->assertEquals('Master of Science', $profile->education_details[0]['qualification']);
        $this->assertIsArray($profile->professional_details);
        $this->assertEquals('Math Teacher', $profile->professional_details[0]['designation']);
        $this->assertIsArray($profile->social_links);
        $this->assertEquals('https://linkedin.com/in/johnteacher', $profile->social_links['linkedin']);
        $this->assertEquals('https://github.com/johnteacher', $profile->social_links['github']);
    }

    public function test_admin_is_redirected_to_admin_panel_after_login(): void
    {
        $admin = User::factory()->create([
            'is_profile_complete' => true,
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);
        $admin->assignRole('admin');
        $admin = $admin->fresh();

        \Filament\Facades\Filament::setCurrentPanel(\Filament\Facades\Filament::getPanel('admin'));

        Livewire::test(\Filament\Auth\Pages\Login::class)
            ->fillForm([
                'email' => $admin->email,
                'password' => 'password',
            ])
            ->call('authenticate')
            ->assertHasNoErrors()
            ->assertRedirect(route('filament.admin.pages.dashboard'));
    }

    public function test_non_admin_is_redirected_to_portal_panel_after_login(): void
    {
        $user = User::factory()->create([
            'is_profile_complete' => true,
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
        ]);
        $user->assignRole('public');
        $user = $user->fresh();

        \Filament\Facades\Filament::setCurrentPanel(\Filament\Facades\Filament::getPanel('portal'));

        Livewire::test(\Filament\Auth\Pages\Login::class)
            ->fillForm([
                'email' => $user->email,
                'password' => 'password',
            ])
            ->call('authenticate')
            ->assertHasNoErrors()
            ->assertRedirect(route('filament.portal.pages.dashboard'));
    }

    public function test_user_can_edit_their_profile_details(): void
    {
        $user = User::factory()->create([
            'is_profile_complete' => true,
        ]);
        $user->assignRole('public');
        $user = $user->fresh();

        // Seed an initial profile
        $user->profile()->create([
            'full_name' => 'Original Name',
            'phone_no' => '1111111111',
            'city' => 'Old City',
            'education_details' => [
                [
                    'qualification' => 'B.Sc',
                    'institution' => 'Old College',
                    'passing_year' => '2010',
                    'grade' => 'B',
                ]
            ],
            'professional_details' => [
                [
                    'designation' => 'Junior Tutor',
                    'organization' => 'Old School',
                    'years_experience' => 1,
                    'description' => 'Taught elementary algebra',
                ]
            ]
        ]);

        \Filament\Facades\Filament::setCurrentPanel(\Filament\Facades\Filament::getPanel('portal'));

        Livewire::actingAs($user)
            ->test(\App\Filament\Portal\Pages\EditProfile::class)
            ->fillForm([
                'name' => 'New User Name',
                'email' => $user->email,
                'phone_no' => '9999999999',
                'bio' => 'An updated bio details.',
                'city' => 'New City',
                'country' => 'Canada',
                'education_details' => [
                    [
                        'qualification' => 'PhD in Physics',
                        'institution' => 'Stanford',
                        'passing_year' => '2022',
                        'grade' => 'A',
                    ]
                ],
                'professional_details' => [
                    [
                        'designation' => 'Lead Expert',
                        'organization' => 'Stanford Lab',
                        'years_experience' => 3,
                        'description' => 'Quantum research advisor',
                    ]
                ],
                'linkedin' => 'https://linkedin.com/in/newuser',
                'github' => 'https://github.com/newuser',
            ])
            ->call('save')
            ->assertHasNoErrors();

        $user->refresh();
        $this->assertEquals('New User Name', $user->name);

        $profile = $user->profile;
        $this->assertEquals('9999999999', $profile->phone_no);
        $this->assertEquals('An updated bio details.', $profile->bio);
        $this->assertEquals('New City', $profile->city);
        $this->assertEquals('Canada', $profile->country);
        $this->assertIsArray($profile->education_details);
        $this->assertEquals('PhD in Physics', $profile->education_details[0]['qualification']);
        $this->assertIsArray($profile->professional_details);
        $this->assertEquals('Lead Expert', $profile->professional_details[0]['designation']);
        $this->assertIsArray($profile->social_links);
        $this->assertEquals('https://linkedin.com/in/newuser', $profile->social_links['linkedin']);
        $this->assertEquals('https://github.com/newuser', $profile->social_links['github']);
    }
}
