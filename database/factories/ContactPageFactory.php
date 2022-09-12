<?php

namespace Database\Factories;

use App\Models\ContactPage;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactPageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContactPage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'google_map' => $this->faker->text,
            'meta_title' => $this->faker->text(255),
            'meta_keyword' => $this->faker->text,
            'meta_description' => $this->faker->text,
        ];
    }
}
