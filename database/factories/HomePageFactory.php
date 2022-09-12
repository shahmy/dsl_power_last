<?php

namespace Database\Factories;

use App\Models\HomePage;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class HomePageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HomePage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->url,
            'url' => $this->faker->text(255),
            'meta_title' => $this->faker->text(255),
            'meta_keyword' => $this->faker->text(255),
            'meta_description' => $this->faker->text,
        ];
    }
}
