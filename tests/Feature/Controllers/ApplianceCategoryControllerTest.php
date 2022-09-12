<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\ApplianceCategory;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApplianceCategoryControllerTest extends TestCase
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
    public function it_displays_index_view_with_appliance_categories()
    {
        $applianceCategories = ApplianceCategory::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('appliance-categories.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.appliance_categories.index')
            ->assertViewHas('applianceCategories');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_appliance_category()
    {
        $response = $this->get(route('appliance-categories.create'));

        $response->assertOk()->assertViewIs('app.appliance_categories.create');
    }

    /**
     * @test
     */
    public function it_stores_the_appliance_category()
    {
        $data = ApplianceCategory::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('appliance-categories.store'), $data);

        $this->assertDatabaseHas('appliance_categories', $data);

        $applianceCategory = ApplianceCategory::latest('id')->first();

        $response->assertRedirect(
            route('appliance-categories.edit', $applianceCategory)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_appliance_category()
    {
        $applianceCategory = ApplianceCategory::factory()->create();

        $response = $this->get(
            route('appliance-categories.show', $applianceCategory)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.appliance_categories.show')
            ->assertViewHas('applianceCategory');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_appliance_category()
    {
        $applianceCategory = ApplianceCategory::factory()->create();

        $response = $this->get(
            route('appliance-categories.edit', $applianceCategory)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.appliance_categories.edit')
            ->assertViewHas('applianceCategory');
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

        $response = $this->put(
            route('appliance-categories.update', $applianceCategory),
            $data
        );

        $data['id'] = $applianceCategory->id;

        $this->assertDatabaseHas('appliance_categories', $data);

        $response->assertRedirect(
            route('appliance-categories.edit', $applianceCategory)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_appliance_category()
    {
        $applianceCategory = ApplianceCategory::factory()->create();

        $response = $this->delete(
            route('appliance-categories.destroy', $applianceCategory)
        );

        $response->assertRedirect(route('appliance-categories.index'));

        $this->assertModelMissing($applianceCategory);
    }
}
