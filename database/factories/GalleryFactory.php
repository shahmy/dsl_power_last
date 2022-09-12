<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gallery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence(15),
            'status' => $this->faker->boolean,
            'post_id' => \App\Models\Post::factory(),
            'project_id' => \App\Models\Project::factory(),
            'product_id' => \App\Models\Product::factory(),
        ];
    }
}
