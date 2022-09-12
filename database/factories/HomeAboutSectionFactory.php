<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\HomeAboutSection;
use Illuminate\Database\Eloquent\Factories\Factory;

class HomeAboutSectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HomeAboutSection::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'heading' => $this->faker->sentence(10),
            'sub_heading' => $this->faker->text(255),
            'description' => $this->faker->text,
            'image_title' => $this->faker->text(255),
            'button_name' => $this->faker->text(255),
            'button_link' => $this->faker->text(255),
        ];
    }
}
