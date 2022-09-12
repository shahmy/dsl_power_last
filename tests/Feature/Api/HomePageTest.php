<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\HomePage;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomePageTest extends TestCase
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
    public function it_gets_home_pages_list()
    {
        $homePages = HomePage::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.home-pages.index'));

        $response->assertOk()->assertSee($homePages[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_home_page()
    {
        $data = HomePage::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.home-pages.store'), $data);

        $this->assertDatabaseHas('home_pages', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_home_page()
    {
        $homePage = HomePage::factory()->create();

        $data = [
            'name' => $this->faker->url,
            'url' => $this->faker->text(255),
            'meta_title' => $this->faker->text(255),
            'meta_keyword' => $this->faker->text(255),
            'meta_description' => $this->faker->text,
        ];

        $response = $this->putJson(
            route('api.home-pages.update', $homePage),
            $data
        );

        $data['id'] = $homePage->id;

        $this->assertDatabaseHas('home_pages', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_home_page()
    {
        $homePage = HomePage::factory()->create();

        $response = $this->deleteJson(
            route('api.home-pages.destroy', $homePage)
        );

        $this->assertModelMissing($homePage);

        $response->assertNoContent();
    }
}
