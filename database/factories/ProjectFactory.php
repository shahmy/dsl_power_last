<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(10),
            'slug' => $this->faker->slug,
            'small_description' => $this->faker->text,
            'detail_description' => $this->faker->text,
            'featured_image' => $this->faker->text(255),
            'duration' => $this->faker->text(255),
            'meta_title' => $this->faker->text(255),
            'meta_keyword' => $this->faker->text(255),
            'meta_description' => $this->faker->text,
            'status' => $this->faker->boolean,
        ];
    }
}
