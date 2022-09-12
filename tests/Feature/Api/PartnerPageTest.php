<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\PartnerPage;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PartnerPageTest extends TestCase
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
    public function it_gets_partner_pages_list()
    {
        $partnerPages = PartnerPage::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.partner-pages.index'));

        $response->assertOk()->assertSee($partnerPages[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_partner_page()
    {
        $data = PartnerPage::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.partner-pages.store'), $data);

        $this->assertDatabaseHas('partner_pages', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_partner_page()
    {
        $partnerPage = PartnerPage::factory()->create();

        $data = [
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'url' => $this->faker->url,
            'title_bg_image' => $this->faker->text(255),
            'title_description' => $this->faker->text,
            'description' => $this->faker->text,
            'meta_title' => $this->faker->text(255),
            'meta_keyword' => $this->faker->text,
            'meta_description' => $this->faker->text,
        ];

        $response = $this->putJson(
            route('api.partner-pages.update', $partnerPage),
            $data
        );

        $data['id'] = $partnerPage->id;

        $this->assertDatabaseHas('partner_pages', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_partner_page()
    {
        $partnerPage = PartnerPage::factory()->create();

        $response = $this->deleteJson(
            route('api.partner-pages.destroy', $partnerPage)
        );

        $this->assertModelMissing($partnerPage);

        $response->assertNoContent();
    }
}
