<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Video;
use App\Models\Gallery;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GalleryVideosTest extends TestCase
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
    public function it_gets_gallery_videos()
    {
        $gallery = Gallery::factory()->create();
        $videos = Video::factory()
            ->count(2)
            ->create([
                'gallery_id' => $gallery->id,
            ]);

        $response = $this->getJson(
            route('api.galleries.videos.index', $gallery)
        );

        $response->assertOk()->assertSee($videos[0]->video_url);
    }

    /**
     * @test
     */
    public function it_stores_the_gallery_videos()
    {
        $gallery = Gallery::factory()->create();
        $data = Video::factory()
            ->make([
                'gallery_id' => $gallery->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.galleries.videos.store', $gallery),
            $data
        );

        unset($data['gallery_id']);

        $this->assertDatabaseHas('videos', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $video = Video::latest('id')->first();

        $this->assertEquals($gallery->id, $video->gallery_id);
    }
}
