<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Gallery;

use App\Models\Post;
use App\Models\Project;
use App\Models\Product;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GalleryTest extends TestCase
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
    public function it_gets_galleries_list()
    {
        $galleries = Gallery::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.galleries.index'));

        $response->assertOk()->assertSee($galleries[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_gallery()
    {
        $data = Gallery::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.galleries.store'), $data);

        $this->assertDatabaseHas('galleries', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_gallery()
    {
        $gallery = Gallery::factory()->create();

        $post = Post::factory()->create();
        $project = Project::factory()->create();
        $product = Product::factory()->create();

        $data = [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence(15),
            'status' => $this->faker->boolean,
            'post_id' => $post->id,
            'project_id' => $project->id,
            'product_id' => $product->id,
        ];

        $response = $this->putJson(
            route('api.galleries.update', $gallery),
            $data
        );

        $data['id'] = $gallery->id;

        $this->assertDatabaseHas('galleries', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_gallery()
    {
        $gallery = Gallery::factory()->create();

        $response = $this->deleteJson(route('api.galleries.destroy', $gallery));

        $this->assertModelMissing($gallery);

        $response->assertNoContent();
    }
}
