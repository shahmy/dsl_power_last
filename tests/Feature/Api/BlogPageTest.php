<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\BlogPage;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BlogPageTest extends TestCase
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
    public function it_gets_blog_pages_list()
    {
        $blogPages = BlogPage::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.blog-pages.index'));

        $response->assertOk()->assertSee($blogPages[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_blog_page()
    {
        $data = BlogPage::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.blog-pages.store'), $data);

        $this->assertDatabaseHas('blog_pages', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
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

        $response = $this->putJson(
            route('api.blog-pages.update', $blogPage),
            $data
        );

        $data['id'] = $blogPage->id;

        $this->assertDatabaseHas('blog_pages', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_blog_page()
    {
        $blogPage = BlogPage::factory()->create();

        $response = $this->deleteJson(
            route('api.blog-pages.destroy', $blogPage)
        );

        $this->assertModelMissing($blogPage);

        $response->assertNoContent();
    }
}
