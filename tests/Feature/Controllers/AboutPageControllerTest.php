<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\AboutPage;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AboutPageControllerTest extends TestCase
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
    public function it_displays_index_view_with_about_pages()
    {
        $aboutPages = AboutPage::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('about-pages.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.about_pages.index')
            ->assertViewHas('aboutPages');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_about_page()
    {
        $response = $this->get(route('about-pages.create'));

        $response->assertOk()->assertViewIs('app.about_pages.create');
    }

    /**
     * @test
     */
    public function it_stores_the_about_page()
    {
        $data = AboutPage::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('about-pages.store'), $data);

        $this->assertDatabaseHas('about_pages', $data);

        $aboutPage = AboutPage::latest('id')->first();

        $response->assertRedirect(route('about-pages.edit', $aboutPage));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_about_page()
    {
        $aboutPage = AboutPage::factory()->create();

        $response = $this->get(route('about-pages.show', $aboutPage));

        $response
            ->assertOk()
            ->assertViewIs('app.about_pages.show')
            ->assertViewHas('aboutPage');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_about_page()
    {
        $aboutPage = AboutPage::factory()->create();

        $response = $this->get(route('about-pages.edit', $aboutPage));

        $response
            ->assertOk()
            ->assertViewIs('app.about_pages.edit')
            ->assertViewHas('aboutPage');
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

        $response = $this->put(route('about-pages.update', $aboutPage), $data);

        $data['id'] = $aboutPage->id;

        $this->assertDatabaseHas('about_pages', $data);

        $response->assertRedirect(route('about-pages.edit', $aboutPage));
    }

    /**
     * @test
     */
    public function it_deletes_the_about_page()
    {
        $aboutPage = AboutPage::factory()->create();

        $response = $this->delete(route('about-pages.destroy', $aboutPage));

        $response->assertRedirect(route('about-pages.index'));

        $this->assertModelMissing($aboutPage);
    }
}
