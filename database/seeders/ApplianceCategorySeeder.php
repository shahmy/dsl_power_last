<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApplianceCategory;

class ApplianceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplianceCategory::factory()
            ->count(5)
            ->create();
    }
}
