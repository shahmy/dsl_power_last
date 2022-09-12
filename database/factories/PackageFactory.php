<?php

namespace Database\Factories;

use App\Models\Package;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PackageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Package::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'description' => $this->faker->text,
            'featured_image' => $this->faker->text(255),
            'price' => $this->faker->randomFloat(2, 0, 9999),
            'title_bg_image' => $this->faker->text(255),
            'meta_title' => $this->faker->text(255),
            'meta_keyword' => $this->faker->text,
            'meta_description' => $this->faker->text,
            'status' => $this->faker->boolean,
        ];
    }
}
