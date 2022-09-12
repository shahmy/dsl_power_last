<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\PartnerPage;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PartnerPageControllerTest extends TestCase
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
    public function it_displays_index_view_with_partner_pages()
    {
        $partnerPages = PartnerPage::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('partner-pages.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.partner_pages.index')
            ->assertViewHas('partnerPages');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_partner_page()
    {
        $response = $this->get(route('partner-pages.create'));

        $response->assertOk()->assertViewIs('app.partner_pages.create');
    }

    /**
     * @test
     */
    public function it_stores_the_partner_page()
    {
        $data = PartnerPage::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('partner-pages.store'), $data);

        $this->assertDatabaseHas('partner_pages', $data);

        $partnerPage = PartnerPage::latest('id')->first();

        $response->assertRedirect(route('partner-pages.edit', $partnerPage));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_partner_page()
    {
        $partnerPage = PartnerPage::factory()->create();

        $response = $this->get(route('partner-pages.show', $partnerPage));

        $response
            ->assertOk()
            ->assertViewIs('app.partner_pages.show')
            ->assertViewHas('partnerPage');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_partner_page()
    {
        $partnerPage = PartnerPage::factory()->create();

        $response = $this->get(route('partner-pages.edit', $partnerPage));

        $response
            ->assertOk()
            ->assertViewIs('app.partner_pages.edit')
            ->assertViewHas('partnerPage');
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

        $response = $this->put(
            route('partner-pages.update', $partnerPage),
            $data
        );

        $data['id'] = $partnerPage->id;

        $this->assertDatabaseHas('partner_pages', $data);

        $response->assertRedirect(route('partner-pages.edit', $partnerPage));
    }

    /**
     * @test
     */
    public function it_deletes_the_partner_page()
    {
        $partnerPage = PartnerPage::factory()->create();

        $response = $this->delete(route('partner-pages.destroy', $partnerPage));

        $response->assertRedirect(route('partner-pages.index'));

        $this->assertModelMissing($partnerPage);
    }
}
