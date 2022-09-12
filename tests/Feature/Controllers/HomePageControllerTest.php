<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\HomePage;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomePageControllerTest extends TestCase
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
    public function it_displays_index_view_with_home_pages()
    {
        $homePages = HomePage::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('home-pages.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.home_pages.index')
            ->assertViewHas('homePages');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_home_page()
    {
        $response = $this->get(route('home-pages.create'));

        $response->assertOk()->assertViewIs('app.home_pages.create');
    }

    /**
     * @test
     */
    public function it_stores_the_home_page()
    {
        $data = HomePage::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('home-pages.store'), $data);

        $this->assertDatabaseHas('home_pages', $data);

        $homePage = HomePage::latest('id')->first();

        $response->assertRedirect(route('home-pages.edit', $homePage));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_home_page()
    {
        $homePage = HomePage::factory()->create();

        $response = $this->get(route('home-pages.show', $homePage));

        $response
            ->assertOk()
            ->assertViewIs('app.home_pages.show')
            ->assertViewHas('homePage');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_home_page()
    {
        $homePage = HomePage::factory()->create();

        $response = $this->get(route('home-pages.edit', $homePage));

        $response
            ->assertOk()
            ->assertViewIs('app.home_pages.edit')
            ->assertViewHas('homePage');
    }

    /**
     * @test
     */
    public function it_updates_the_home_page()
    {
        $homePage = HomePage::factory()->create();

        $data = [
            'name' => $this->faker->url,
            'url' => $this->faker->text(255),
            'meta_title' => $this->faker->text(255),
            'meta_keyword' => $this->faker->text(255),
            'meta_description' => $this->faker->text,
        ];

        $response = $this->put(route('home-pages.update', $homePage), $data);

        $data['id'] = $homePage->id;

        $this->assertDatabaseHas('home_pages', $data);

        $response->assertRedirect(route('home-pages.edit', $homePage));
    }

    /**
     * @test
     */
    public function it_deletes_the_home_page()
    {
        $homePage = HomePage::factory()->create();

        $response = $this->delete(route('home-pages.destroy', $homePage));

        $response->assertRedirect(route('home-pages.index'));

        $this->assertModelMissing($homePage);
    }
}
