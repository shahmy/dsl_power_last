<?php

namespace Database\Factories;

use App\Models\HomeSlider;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class HomeSliderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HomeSlider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(10),
            'description' => $this->faker->sentence(15),
            'button_name' => $this->faker->text(255),
            'image' => $this->faker->text(255),
            'button_url' => $this->faker->text(255),
            'video_url' => $this->faker->text(255),
            'status' => $this->faker->boolean,
        ];
    }
}
