<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Testimonial::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(10),
            'description' => $this->faker->text,
            'logo' => $this->faker->text(255),
            'company_name' => $this->faker->text(255),
        ];
    }
}
