<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\HomeAboutSection;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeAboutSectionTest extends TestCase
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
    public function it_gets_home_about_sections_list()
    {
        $homeAboutSections = HomeAboutSection::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.home-about-sections.index'));

        $response->assertOk()->assertSee($homeAboutSections[0]->heading);
    }

    /**
     * @test
     */
    public function it_stores_the_home_about_section()
    {
        $data = HomeAboutSection::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(
            route('api.home-about-sections.store'),
            $data
        );

        $this->assertDatabaseHas('home_about_sections', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
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

        $response = $this->putJson(
            route('api.home-about-sections.update', $homeAboutSection),
            $data
        );

        $data['id'] = $homeAboutSection->id;

        $this->assertDatabaseHas('home_about_sections', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_home_about_section()
    {
        $homeAboutSection = HomeAboutSection::factory()->create();

        $response = $this->deleteJson(
            route('api.home-about-sections.destroy', $homeAboutSection)
        );

        $this->assertModelMissing($homeAboutSection);

        $response->assertNoContent();
    }
}
