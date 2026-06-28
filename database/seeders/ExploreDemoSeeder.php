<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ExploreDemoSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create Expert: Dr. Rajesh Kumar
        $expert = User::updateOrCreate(
            ['email' => 'rajesh.expert@example.com'],
            [
                'name' => 'Dr. Rajesh Kumar',
                'password' => Hash::make('password'),
                'status' => 'active',
                'is_email_verified' => 'yes',
                'is_profile_complete' => true,
            ]
        );
        $expert->syncRoles(['expert']);
        $expert->profile()->updateOrCreate(
            ['user_id' => $expert->id],
            [
                'full_name' => 'Dr. Rajesh Kumar',
                'phone_no' => '9876543210',
                'date_of_birth' => '1980-08-12',
                'gender' => 'male',
                'bio' => 'Senior Research Advisor & Patent Consultant. Over 15 years guiding startups and PhD scholars in Intellectual Property Rights and advanced research design.',
                'city' => 'New Delhi',
                'state' => 'Delhi',
                'country' => 'India',
                'pincode' => '110001',
                'education_details' => [
                    [
                        'qualification' => 'Ph.D. in Intellectual Property Law',
                        'institution' => 'National Law University',
                        'passing_year' => '2010',
                        'grade' => 'Distinction',
                    ],
                    [
                        'qualification' => 'Master of Laws (LL.M.)',
                        'institution' => 'Delhi University',
                        'passing_year' => '2005',
                        'grade' => 'First Class',
                    ]
                ],
                'professional_details' => [
                    [
                        'designation' => 'Chief IPR Consultant',
                        'organization' => 'AcadNext Legal Solutions',
                        'years_experience' => '8',
                        'description' => 'Overseeing patent draftings, trademark filings, and providing legal counsel to tech startups.',
                    ],
                    [
                        'designation' => 'Associate Professor (Guest)',
                        'organization' => 'Indian Institute of Technology',
                        'years_experience' => '5',
                        'description' => 'Conducting workshops on research methodology and academic writing conventions.',
                    ]
                ]
            ]
        );

        // 2. Create Expert: Sarah Jenkins
        $expert2 = User::updateOrCreate(
            ['email' => 'sarah.expert@example.com'],
            [
                'name' => 'Sarah Jenkins',
                'password' => Hash::make('password'),
                'status' => 'active',
                'is_email_verified' => 'yes',
                'is_profile_complete' => true,
            ]
        );
        $expert2->syncRoles(['expert']);
        $expert2->profile()->updateOrCreate(
            ['user_id' => $expert2->id],
            [
                'full_name' => 'Sarah Jenkins',
                'phone_no' => '15550192',
                'date_of_birth' => '1988-04-23',
                'gender' => 'female',
                'bio' => 'Lead Career Coach & Placement Strategist. Helping young engineers and managers build outstanding resumes, portfolio websites, and crack technical interviews at top Fortune 500 companies.',
                'city' => 'San Francisco',
                'state' => 'California',
                'country' => 'USA',
                'pincode' => '94101',
                'education_details' => [
                    [
                        'qualification' => 'M.S. in Human Resource Management',
                        'institution' => 'Golden Gate University',
                        'passing_year' => '2014',
                        'grade' => '3.8 GPA',
                    ],
                    [
                        'qualification' => 'B.S. in Psychology',
                        'institution' => 'UC Berkeley',
                        'passing_year' => '2010',
                        'grade' => '3.9 GPA',
                    ]
                ],
                'professional_details' => [
                    [
                        'designation' => 'Director of Talent Acquisition & Coaching',
                        'organization' => 'Pathways Consulting',
                        'years_experience' => '6',
                        'description' => 'Designed interactive placement curriculum and conducted direct interviews prep for 500+ candidates.',
                    ]
                ]
            ]
        );

        // 3. Create Teacher: Prof. Amit Sharma
        $teacher = User::updateOrCreate(
            ['email' => 'amit.teacher@example.com'],
            [
                'name' => 'Prof. Amit Sharma',
                'password' => Hash::make('password'),
                'status' => 'active',
                'is_email_verified' => 'yes',
                'is_profile_complete' => true,
            ]
        );
        $teacher->syncRoles(['teacher']);
        $teacher->profile()->updateOrCreate(
            ['user_id' => $teacher->id],
            [
                'full_name' => 'Prof. Amit Sharma',
                'phone_no' => '9812345678',
                'date_of_birth' => '1975-11-05',
                'gender' => 'male',
                'bio' => 'Distinguished Professor of Advanced Mathematics & Statistics. Passionate about teaching Calculus, Linear Algebra, and Machine Learning algorithms with hands-on practical applications.',
                'city' => 'Mumbai',
                'state' => 'Maharashtra',
                'country' => 'India',
                'pincode' => '400001',
                'education_details' => [
                    [
                        'qualification' => 'Ph.D. in Applied Mathematics',
                        'institution' => 'IIT Bombay',
                        'passing_year' => '2002',
                        'grade' => 'Outstanding Thesis',
                    ],
                    [
                        'qualification' => 'M.Sc. in Mathematics',
                        'institution' => 'University of Mumbai',
                        'passing_year' => '1997',
                        'grade' => 'Gold Medalist',
                    ]
                ],
                'professional_details' => [
                    [
                        'designation' => 'Head of Mathematics Department',
                        'organization' => 'Somaiya College of Science',
                        'years_experience' => '12',
                        'description' => 'Managing academic curriculum, research publications, and mentoring junior faculty members.',
                    ],
                    [
                        'designation' => 'Senior Lecturer',
                        'organization' => 'St. Xavier College',
                        'years_experience' => '8',
                        'description' => 'Teaching undergraduate students and supervising analytical research projects.',
                    ]
                ]
            ]
        );

        // 4. Create Teacher: Elena Rostova
        $teacher2 = User::updateOrCreate(
            ['email' => 'elena.teacher@example.com'],
            [
                'name' => 'Elena Rostova',
                'password' => Hash::make('password'),
                'status' => 'active',
                'is_email_verified' => 'yes',
                'is_profile_complete' => true,
            ]
        );
        $teacher2->syncRoles(['teacher']);
        $teacher2->profile()->updateOrCreate(
            ['user_id' => $teacher2->id],
            [
                'full_name' => 'Elena Rostova',
                'phone_no' => '791234567',
                'date_of_birth' => '1985-03-15',
                'gender' => 'female',
                'bio' => 'Computer Science Educator & Live Coding Instructor. Specializing in Python, Data Structures, and building web applications using modern frameworks.',
                'city' => 'Saint Petersburg',
                'state' => 'Leningrad',
                'country' => 'Russia',
                'pincode' => '190000',
                'education_details' => [
                    [
                        'qualification' => 'Master of Science in Software Engineering',
                        'institution' => 'ITMO University',
                        'passing_year' => '2008',
                        'grade' => 'Honors',
                    ]
                ],
                'professional_details' => [
                    [
                        'designation' => 'Lead CS Curriculum Architect',
                        'organization' => 'Code Academy Global',
                        'years_experience' => '7',
                        'description' => 'Authored interactive coding courses taken by over 20,000 students worldwide.',
                    ]
                ]
            ]
        );
    }
}
