<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\AboutPage;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AboutPageTest extends TestCase
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
    public function it_gets_about_pages_list()
    {
        $aboutPages = AboutPage::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.about-pages.index'));

        $response->assertOk()->assertSee($aboutPages[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_about_page()
    {
        $data = AboutPage::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.about-pages.store'), $data);

        $this->assertDatabaseHas('about_pages', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_about_page()
    {
        $aboutPage = AboutPage::factory()->create();

        $data = [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'url' => $this->faker->url,
            'description' => $this->faker->text,
            'title_bg_image' => $this->faker->text(255),
            'title_description' => $this->faker->text,
            'featured_image' => $this->faker->text(255),
            'meta_title' => $this->faker->text(255),
            'meta_keyword' => $this->faker->text,
            'meta_description' => $this->faker->text,
        ];

        $response = $this->putJson(
            route('api.about-pages.update', $aboutPage),
            $data
        );

        $data['id'] = $aboutPage->id;

        $this->assertDatabaseHas('about_pages', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_about_page()
    {
        $aboutPage = AboutPage::factory()->create();

        $response = $this->deleteJson(
            route('api.about-pages.destroy', $aboutPage)
        );

        $this->assertModelMissing($aboutPage);

        $response->assertNoContent();
    }
}
