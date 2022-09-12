<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'small_description' => $this->faker->sentence(15),
            'detail_description' => $this->faker->text,
            'featured_image' => $this->faker->text(255),
            'status' => $this->faker->boolean,
            'product_category_id' => \App\Models\ProductCategory::factory(),
        ];
    }
}
