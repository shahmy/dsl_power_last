<?php

namespace Database\Factories;

use App\Models\Photo;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->name,
            'status' => $this->faker->boolean,
            'gallery_id' => \App\Models\Gallery::factory(),
        ];
    }
}
