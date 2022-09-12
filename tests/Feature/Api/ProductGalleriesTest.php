<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Product;
use App\Models\Gallery;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductGalleriesTest extends TestCase
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
    public function it_gets_product_galleries()
    {
        $product = Product::factory()->create();
        $galleries = Gallery::factory()
            ->count(2)
            ->create([
                'product_id' => $product->id,
            ]);

        $response = $this->getJson(
            route('api.products.galleries.index', $product)
        );

        $response->assertOk()->assertSee($galleries[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_product_galleries()
    {
        $product = Product::factory()->create();
        $data = Gallery::factory()
            ->make([
                'product_id' => $product->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.products.galleries.store', $product),
            $data
        );

        $this->assertDatabaseHas('galleries', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $gallery = Gallery::latest('id')->first();

        $this->assertEquals($product->id, $gallery->product_id);
    }
}
