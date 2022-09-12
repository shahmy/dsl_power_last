<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeAboutSection;

class HomeAboutSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeAboutSection::factory()
            ->count(5)
            ->create();
    }
}
