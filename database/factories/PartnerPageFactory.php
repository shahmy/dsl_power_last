<?php

namespace Database\Factories;

use App\Models\PartnerPage;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerPageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PartnerPage::class;

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
            'url' => $this->faker->url,
            'title_bg_image' => $this->faker->text(255),
            'title_description' => $this->faker->text,
            'description' => $this->faker->text,
            'meta_title' => $this->faker->text(255),
            'meta_keyword' => $this->faker->text,
            'meta_description' => $this->faker->text,
        ];
    }
}
