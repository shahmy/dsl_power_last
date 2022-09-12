<?php

namespace Database\Seeders;

use App\Models\LoadItem;
use Illuminate\Database\Seeder;

class LoadItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoadItem::factory()
            ->count(5)
            ->create();
    }
}
