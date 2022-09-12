<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\HomeSlider;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeSliderTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $user = User::factory()->create(['email' => 'admin@admin.com']);

        Sanctum::actingAs($user, [], 'web');

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_gets_home_sliders_list()
    {
        $homeSliders = HomeSlider::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.home-sliders.index'));

        $response->assertOk()->assertSee($homeSliders[0]->title);
    }

    /**
     * @test
     */
    public function it_stores_the_home_slider()
    {
        $data = HomeSlider::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.home-sliders.store'), $data);

        $this->assertDatabaseHas('home_sliders', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_home_slider()
    {
        $homeSlider = HomeSlider::factory()->create();

        $data = [
            'title' => $this->faker->sentence(10),
            'description' => $this->faker->sentence(15),
            'button_name' => $this->faker->text(255),
            'button_url' => $this->faker->text(255),
            'video_url' => $this->faker->text(255),
            'status' => $this->faker->boolean,
        ];

        $response = $this->putJson(
            route('api.home-sliders.update', $homeSlider),
            $data
        );

        $data['id'] = $homeSlider->id;

        $this->assertDatabaseHas('home_sliders', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_home_slider()
    {
        $homeSlider = HomeSlider::factory()->create();

        $response = $this->deleteJson(
            route('api.home-sliders.destroy', $homeSlider)
        );

        $this->assertModelMissing($homeSlider);

        $response->assertNoContent();
    }
}
