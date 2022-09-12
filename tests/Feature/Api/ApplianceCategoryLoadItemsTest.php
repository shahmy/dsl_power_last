<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\LoadItem;
use App\Models\ApplianceCategory;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApplianceCategoryLoadItemsTest extends TestCase
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
    public function it_gets_appliance_category_load_items()
    {
        $applianceCategory = ApplianceCategory::factory()->create();
        $loadItems = LoadItem::factory()
            ->count(2)
            ->create([
                'appliance_category_id' => $applianceCategory->id,
            ]);

        $response = $this->getJson(
            route(
                'api.appliance-categories.load-items.index',
                $applianceCategory
            )
        );

        $response->assertOk()->assertSee($loadItems[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_appliance_category_load_items()
    {
        $applianceCategory = ApplianceCategory::factory()->create();
        $data = LoadItem::factory()
            ->make([
                'appliance_category_id' => $applianceCategory->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route(
                'api.appliance-categories.load-items.store',
                $applianceCategory
            ),
            $data
        );

        $this->assertDatabaseHas('load_items', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $loadItem = LoadItem::latest('id')->first();

        $this->assertEquals(
            $applianceCategory->id,
            $loadItem->appliance_category_id
        );
    }
}
