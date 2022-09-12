<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\LoadItem;

use App\Models\ApplianceCategory;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoadItemTest extends TestCase
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
    public function it_gets_load_items_list()
    {
        $loadItems = LoadItem::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.load-items.index'));

        $response->assertOk()->assertSee($loadItems[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_load_item()
    {
        $data = LoadItem::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.load-items.store'), $data);

        $this->assertDatabaseHas('load_items', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_load_item()
    {
        $loadItem = LoadItem::factory()->create();

        $applianceCategory = ApplianceCategory::factory()->create();

        $data = [
            'name' => $this->faker->name,
            'watts' => $this->faker->randomNumber(2),
            'appliance_category_id' => $applianceCategory->id,
        ];

        $response = $this->putJson(
            route('api.load-items.update', $loadItem),
            $data
        );

        $data['id'] = $loadItem->id;

        $this->assertDatabaseHas('load_items', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_load_item()
    {
        $loadItem = LoadItem::factory()->create();

        $response = $this->deleteJson(
            route('api.load-items.destroy', $loadItem)
        );

        $this->assertModelMissing($loadItem);

        $response->assertNoContent();
    }
}
