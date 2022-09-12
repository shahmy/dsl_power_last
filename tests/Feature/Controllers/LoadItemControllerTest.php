<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\LoadItem;

use App\Models\ApplianceCategory;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoadItemControllerTest extends TestCase
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
    public function it_displays_index_view_with_load_items()
    {
        $loadItems = LoadItem::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('load-items.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.load_items.index')
            ->assertViewHas('loadItems');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_load_item()
    {
        $response = $this->get(route('load-items.create'));

        $response->assertOk()->assertViewIs('app.load_items.create');
    }

    /**
     * @test
     */
    public function it_stores_the_load_item()
    {
        $data = LoadItem::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('load-items.store'), $data);

        $this->assertDatabaseHas('load_items', $data);

        $loadItem = LoadItem::latest('id')->first();

        $response->assertRedirect(route('load-items.edit', $loadItem));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_load_item()
    {
        $loadItem = LoadItem::factory()->create();

        $response = $this->get(route('load-items.show', $loadItem));

        $response
            ->assertOk()
            ->assertViewIs('app.load_items.show')
            ->assertViewHas('loadItem');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_load_item()
    {
        $loadItem = LoadItem::factory()->create();

        $response = $this->get(route('load-items.edit', $loadItem));

        $response
            ->assertOk()
            ->assertViewIs('app.load_items.edit')
            ->assertViewHas('loadItem');
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

        $response = $this->put(route('load-items.update', $loadItem), $data);

        $data['id'] = $loadItem->id;

        $this->assertDatabaseHas('load_items', $data);

        $response->assertRedirect(route('load-items.edit', $loadItem));
    }

    /**
     * @test
     */
    public function it_deletes_the_load_item()
    {
        $loadItem = LoadItem::factory()->create();

        $response = $this->delete(route('load-items.destroy', $loadItem));

        $response->assertRedirect(route('load-items.index'));

        $this->assertModelMissing($loadItem);
    }
}
