<?php

namespace Database\Factories;

use App\Models\LoadItem;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoadItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LoadItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'watts' => $this->faker->randomNumber(2),
            'appliance_category_id' => \App\Models\ApplianceCategory::factory(),
        ];
    }
}
