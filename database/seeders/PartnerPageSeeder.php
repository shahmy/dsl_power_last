<?php

namespace Database\Seeders;

use App\Models\PartnerPage;
use Illuminate\Database\Seeder;

class PartnerPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PartnerPage::factory()
            ->count(5)
            ->create();
    }
}
