<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Photo;
use App\Models\Gallery;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GalleryPhotosTest extends TestCase
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
    public function it_gets_gallery_photos()
    {
        $gallery = Gallery::factory()->create();
        $photos = Photo::factory()
            ->count(2)
            ->create([
                'gallery_id' => $gallery->id,
            ]);

        $response = $this->getJson(
            route('api.galleries.photos.index', $gallery)
        );

        $response->assertOk()->assertSee($photos[0]->image);
    }

    /**
     * @test
     */
    public function it_stores_the_gallery_photos()
    {
        $gallery = Gallery::factory()->create();
        $data = Photo::factory()
            ->make([
                'gallery_id' => $gallery->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.galleries.photos.store', $gallery),
            $data
        );

        unset($data['gallery_id']);

        $this->assertDatabaseHas('photos', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $photo = Photo::latest('id')->first();

        $this->assertEquals($gallery->id, $photo->gallery_id);
    }
}
