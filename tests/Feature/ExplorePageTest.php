<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExplorePageTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_explore_page_can_be_accessed(): void
    {
        $response = $this->get('/explore');
        $response->assertStatus(200);
    }

    public function test_explore_page_shows_active_experts_by_default(): void
    {
        // 1. Create an active expert user with profile
        $expert = User::factory()->create([
            'status' => 'active',
            'is_profile_complete' => true,
        ]);
        $expert->assignRole('expert');
        $expert->profile()->create([
            'full_name' => 'Dr. Alice Smith',
            'bio' => 'Quantum Computing Expert',
            'city' => 'Boston',
            'education_details' => [
                [
                    'qualification' => 'PhD in Physics',
                    'institution' => 'MIT',
                    'passing_year' => '2018',
                    'grade' => 'A+',
                ]
            ],
            'professional_details' => [
                [
                    'designation' => 'Lead Expert Advisor',
                    'organization' => 'Qubit Corp',
                    'years_experience' => 6,
                    'description' => 'Guiding PhD students',
                ]
            ]
        ]);

        // 2. Create an inactive expert user
        $inactiveExpert = User::factory()->create([
            'status' => 'inactive',
            'is_profile_complete' => true,
        ]);
        $inactiveExpert->assignRole('expert');
        $inactiveExpert->profile()->create([
            'full_name' => 'Inactive Expert',
            'bio' => 'I am inactive',
        ]);

        // 3. Create an active teacher user
        $teacher = User::factory()->create([
            'status' => 'active',
            'is_profile_complete' => true,
        ]);
        $teacher->assignRole('teacher');
        $teacher->profile()->create([
            'full_name' => 'Mr. Bob Teacher',
            'bio' => 'Mathematics Instructor',
        ]);

        // Access the /explore (default parameter is 'expert')
        $response = $this->get('/explore');
        $response->assertStatus(200);

        // Verify active expert is visible with details
        $response->assertSee('Dr. Alice Smith');
        $response->assertSee('Quantum Computing Expert');
        $response->assertSee('PhD in Physics');
        $response->assertSee('MIT');
        $response->assertSee('Lead Expert Advisor');
        $response->assertSee('Qubit Corp');

        // Verify inactive expert is NOT visible
        $response->assertDontSee('Inactive Expert');

        // Verify teacher is NOT visible on the expert tab
        $response->assertDontSee('Mr. Bob Teacher');
    }

    public function test_explore_page_shows_active_teachers_when_parameter_is_set(): void
    {
        // 1. Create an active teacher user with profile
        $teacher = User::factory()->create([
            'status' => 'active',
            'is_profile_complete' => true,
        ]);
        $teacher->assignRole('teacher');
        $teacher->profile()->create([
            'full_name' => 'Mr. Bob Teacher',
            'bio' => 'Mathematics Instructor',
            'education_details' => [
                [
                    'qualification' => 'Master of Education',
                    'institution' => 'Harvard',
                    'passing_year' => '2012',
                ]
            ]
        ]);

        // 2. Create an active expert user
        $expert = User::factory()->create([
            'status' => 'active',
            'is_profile_complete' => true,
        ]);
        $expert->assignRole('expert');
        $expert->profile()->create([
            'full_name' => 'Dr. Alice Expert',
            'bio' => 'Quantum Computing Expert',
        ]);

        // Access /explore?r=teacher
        $response = $this->get('/explore?r=teacher');
        $response->assertStatus(200);

        // Verify active teacher is visible
        $response->assertSee('Mr. Bob Teacher');
        $response->assertSee('Mathematics Instructor');
        $response->assertSee('Master of Education');

        // Verify expert is NOT visible
        $response->assertDontSee('Dr. Alice Expert');
    }
}
