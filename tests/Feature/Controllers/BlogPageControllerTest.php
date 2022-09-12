<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\BlogPage;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BlogPageControllerTest extends TestCase
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
    public function it_displays_index_view_with_blog_pages()
    {
        $blogPages = BlogPage::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('blog-pages.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.blog_pages.index')
            ->assertViewHas('blogPages');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_blog_page()
    {
        $response = $this->get(route('blog-pages.create'));

        $response->assertOk()->assertViewIs('app.blog_pages.create');
    }

    /**
     * @test
     */
    public function it_stores_the_blog_page()
    {
        $data = BlogPage::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('blog-pages.store'), $data);

        $this->assertDatabaseHas('blog_pages', $data);

        $blogPage = BlogPage::latest('id')->first();

        $response->assertRedirect(route('blog-pages.edit', $blogPage));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_blog_page()
    {
        $blogPage = BlogPage::factory()->create();

        $response = $this->get(route('blog-pages.show', $blogPage));

        $response
            ->assertOk()
            ->assertViewIs('app.blog_pages.show')
            ->assertViewHas('blogPage');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_blog_page()
    {
        $blogPage = BlogPage::factory()->create();

        $response = $this->get(route('blog-pages.edit', $blogPage));

        $response
            ->assertOk()
            ->assertViewIs('app.blog_pages.edit')
            ->assertViewHas('blogPage');
    }

    /**
     * @test
     */
    public function it_updates_the_blog_page()
    {
        $blogPage = BlogPage::factory()->create();

        $data = [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'url' => $this->faker->url,
            'title_bg_image' => $this->faker->text(255),
            'title_description' => $this->faker->text,
            'description' => $this->faker->text,
            'meta_title' => $this->faker->text(255),
            'meta_keyword' => $this->faker->text,
            'meta_description' => $this->faker->text,
        ];

        $response = $this->put(route('blog-pages.update', $blogPage), $data);

        $data['id'] = $blogPage->id;

        $this->assertDatabaseHas('blog_pages', $data);

        $response->assertRedirect(route('blog-pages.edit', $blogPage));
    }

    /**
     * @test
     */
    public function it_deletes_the_blog_page()
    {
        $blogPage = BlogPage::factory()->create();

        $response = $this->delete(route('blog-pages.destroy', $blogPage));

        $response->assertRedirect(route('blog-pages.index'));

        $this->assertModelMissing($blogPage);
    }
}
