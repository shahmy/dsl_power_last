<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\HomeSlider;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeSliderControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            User::factory()->create(['email' => 'admin@admin.com'])
        );

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_home_sliders()
    {
        $homeSliders = HomeSlider::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('home-sliders.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.home_sliders.index')
            ->assertViewHas('homeSliders');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_home_slider()
    {
        $response = $this->get(route('home-sliders.create'));

        $response->assertOk()->assertViewIs('app.home_sliders.create');
    }

    /**
     * @test
     */
    public function it_stores_the_home_slider()
    {
        $data = HomeSlider::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('home-sliders.store'), $data);

        $this->assertDatabaseHas('home_sliders', $data);

        $homeSlider = HomeSlider::latest('id')->first();

        $response->assertRedirect(route('home-sliders.edit', $homeSlider));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_home_slider()
    {
        $homeSlider = HomeSlider::factory()->create();

        $response = $this->get(route('home-sliders.show', $homeSlider));

        $response
            ->assertOk()
            ->assertViewIs('app.home_sliders.show')
            ->assertViewHas('homeSlider');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_home_slider()
    {
        $homeSlider = HomeSlider::factory()->create();

        $response = $this->get(route('home-sliders.edit', $homeSlider));

        $response
            ->assertOk()
            ->assertViewIs('app.home_sliders.edit')
            ->assertViewHas('homeSlider');
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

        $response = $this->put(
            route('home-sliders.update', $homeSlider),
            $data
        );

        $data['id'] = $homeSlider->id;

        $this->assertDatabaseHas('home_sliders', $data);

        $response->assertRedirect(route('home-sliders.edit', $homeSlider));
    }

    /**
     * @test
     */
    public function it_deletes_the_home_slider()
    {
        $homeSlider = HomeSlider::factory()->create();

        $response = $this->delete(route('home-sliders.destroy', $homeSlider));

        $response->assertRedirect(route('home-sliders.index'));

        $this->assertModelMissing($homeSlider);
    }
}
