<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\HomeAboutSection;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeAboutSectionControllerTest extends TestCase
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
    public function it_displays_index_view_with_home_about_sections()
    {
        $homeAboutSections = HomeAboutSection::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('home-about-sections.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.home_about_sections.index')
            ->assertViewHas('homeAboutSections');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_home_about_section()
    {
        $response = $this->get(route('home-about-sections.create'));

        $response->assertOk()->assertViewIs('app.home_about_sections.create');
    }

    /**
     * @test
     */
    public function it_stores_the_home_about_section()
    {
        $data = HomeAboutSection::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('home-about-sections.store'), $data);

        $this->assertDatabaseHas('home_about_sections', $data);

        $homeAboutSection = HomeAboutSection::latest('id')->first();

        $response->assertRedirect(
            route('home-about-sections.edit', $homeAboutSection)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_home_about_section()
    {
        $homeAboutSection = HomeAboutSection::factory()->create();

        $response = $this->get(
            route('home-about-sections.show', $homeAboutSection)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.home_about_sections.show')
            ->assertViewHas('homeAboutSection');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_home_about_section()
    {
        $homeAboutSection = HomeAboutSection::factory()->create();

        $response = $this->get(
            route('home-about-sections.edit', $homeAboutSection)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.home_about_sections.edit')
            ->assertViewHas('homeAboutSection');
    }

    /**
     * @test
     */
    public function it_updates_the_home_about_section()
    {
        $homeAboutSection = HomeAboutSection::factory()->create();

        $data = [
            'heading' => $this->faker->sentence(10),
            'sub_heading' => $this->faker->text(255),
            'description' => $this->faker->text,
            'image_title' => $this->faker->text(255),
            'button_name' => $this->faker->text(255),
            'button_link' => $this->faker->text(255),
        ];

        $response = $this->put(
            route('home-about-sections.update', $homeAboutSection),
            $data
        );

        $data['id'] = $homeAboutSection->id;

        $this->assertDatabaseHas('home_about_sections', $data);

        $response->assertRedirect(
            route('home-about-sections.edit', $homeAboutSection)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_home_about_section()
    {
        $homeAboutSection = HomeAboutSection::factory()->create();

        $response = $this->delete(
            route('home-about-sections.destroy', $homeAboutSection)
        );

        $response->assertRedirect(route('home-about-sections.index'));

        $this->assertModelMissing($homeAboutSection);
    }
}
