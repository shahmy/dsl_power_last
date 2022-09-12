<?php

namespace Database\Seeders;

use App\Models\BlogPage;
use Illuminate\Database\Seeder;

class BlogPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BlogPage::factory()
            ->count(5)
            ->create();
    }
}
