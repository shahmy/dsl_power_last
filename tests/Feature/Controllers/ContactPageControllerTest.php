<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\ContactPage;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactPageControllerTest extends TestCase
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
    public function it_displays_index_view_with_contact_pages()
    {
        $contactPages = ContactPage::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('contact-pages.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.contact_pages.index')
            ->assertViewHas('contactPages');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_contact_page()
    {
        $response = $this->get(route('contact-pages.create'));

        $response->assertOk()->assertViewIs('app.contact_pages.create');
    }

    /**
     * @test
     */
    public function it_stores_the_contact_page()
    {
        $data = ContactPage::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('contact-pages.store'), $data);

        $this->assertDatabaseHas('contact_pages', $data);

        $contactPage = ContactPage::latest('id')->first();

        $response->assertRedirect(route('contact-pages.edit', $contactPage));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_contact_page()
    {
        $contactPage = ContactPage::factory()->create();

        $response = $this->get(route('contact-pages.show', $contactPage));

        $response
            ->assertOk()
            ->assertViewIs('app.contact_pages.show')
            ->assertViewHas('contactPage');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_contact_page()
    {
        $contactPage = ContactPage::factory()->create();

        $response = $this->get(route('contact-pages.edit', $contactPage));

        $response
            ->assertOk()
            ->assertViewIs('app.contact_pages.edit')
            ->assertViewHas('contactPage');
    }

    /**
     * @test
     */
    public function it_updates_the_contact_page()
    {
        $contactPage = ContactPage::factory()->create();

        $data = [
            'name' => $this->faker->name,
            'google_map' => $this->faker->text,
            'meta_title' => $this->faker->text(255),
            'meta_keyword' => $this->faker->text,
            'meta_description' => $this->faker->text,
        ];

        $response = $this->put(
            route('contact-pages.update', $contactPage),
            $data
        );

        $data['id'] = $contactPage->id;

        $this->assertDatabaseHas('contact_pages', $data);

        $response->assertRedirect(route('contact-pages.edit', $contactPage));
    }

    /**
     * @test
     */
    public function it_deletes_the_contact_page()
    {
        $contactPage = ContactPage::factory()->create();

        $response = $this->delete(route('contact-pages.destroy', $contactPage));

        $response->assertRedirect(route('contact-pages.index'));

        $this->assertModelMissing($contactPage);
    }
}
