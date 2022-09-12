<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Post;
use App\Models\Gallery;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostGalleriesTest extends TestCase
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
    public function it_gets_post_galleries()
    {
        $post = Post::factory()->create();
        $galleries = Gallery::factory()
            ->count(2)
            ->create([
                'post_id' => $post->id,
            ]);

        $response = $this->getJson(route('api.posts.galleries.index', $post));

        $response->assertOk()->assertSee($galleries[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_post_galleries()
    {
        $post = Post::factory()->create();
        $data = Gallery::factory()
            ->make([
                'post_id' => $post->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.posts.galleries.store', $post),
            $data
        );

        $this->assertDatabaseHas('galleries', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $gallery = Gallery::latest('id')->first();

        $this->assertEquals($post->id, $gallery->post_id);
    }
}
