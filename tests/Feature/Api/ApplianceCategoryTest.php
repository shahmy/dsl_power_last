<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\ApplianceCategory;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApplianceCategoryTest extends TestCase
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
    public function it_gets_appliance_categories_list()
    {
        $applianceCategories = ApplianceCategory::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.appliance-categories.index'));

        $response->assertOk()->assertSee($applianceCategories[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_appliance_category()
    {
        $data = ApplianceCategory::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(
            route('api.appliance-categories.store'),
            $data
        );

        $this->assertDatabaseHas('appliance_categories', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_appliance_category()
    {
        $applianceCategory = ApplianceCategory::factory()->create();

        $data = [
            'name' => $this->faker->name,
        ];

        $response = $this->putJson(
            route('api.appliance-categories.update', $applianceCategory),
            $data
        );

        $data['id'] = $applianceCategory->id;

        $this->assertDatabaseHas('appliance_categories', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_appliance_category()
    {
        $applianceCategory = ApplianceCategory::factory()->create();

        $response = $this->deleteJson(
            route('api.appliance-categories.destroy', $applianceCategory)
        );

        $this->assertModelMissing($applianceCategory);

        $response->assertNoContent();
    }
}
