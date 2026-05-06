<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PartnerType;

class PartnerTypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            ['type_name' => 'ad_partner', 'description' => 'Ad Partner - Run Ads'],
            ['type_name' => 'data_partner', 'description' => 'Data Partner - Data Uploads'],
            ['type_name' => 'government_partner', 'description' => 'Government Partner - Announcements'],
        ];

        foreach ($types as $type) {
            PartnerType::firstOrCreate(
                ['type_name' => $type['type_name']],
                $type // description if added to model later
            );
        }

        $this->command->info('Partner types seeded successfully!');
    }
}
