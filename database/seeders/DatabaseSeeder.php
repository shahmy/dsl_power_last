<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@admin.com',
                'password' => \Hash::make('admin'),
            ]);
        $this->call(PermissionsSeeder::class);

        $this->call(AboutPageSeeder::class);
        $this->call(ApplianceCategorySeeder::class);
        $this->call(BlogPageSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ContactPageSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(HomeAboutSectionSeeder::class);
        $this->call(HomePageSeeder::class);
        $this->call(HomeSliderSeeder::class);
        $this->call(LoadItemSeeder::class);
        $this->call(PackageSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(PartnerPageSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(VideoSeeder::class);
    }
}
