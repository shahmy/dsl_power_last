<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\ContactPage;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactPageTest extends TestCase
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
    public function it_gets_contact_pages_list()
    {
        $contactPages = ContactPage::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.contact-pages.index'));

        $response->assertOk()->assertSee($contactPages[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_contact_page()
    {
        $data = ContactPage::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.contact-pages.store'), $data);

        $this->assertDatabaseHas('contact_pages', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
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

        $response = $this->putJson(
            route('api.contact-pages.update', $contactPage),
            $data
        );

        $data['id'] = $contactPage->id;

        $this->assertDatabaseHas('contact_pages', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_contact_page()
    {
        $contactPage = ContactPage::factory()->create();

        $response = $this->deleteJson(
            route('api.contact-pages.destroy', $contactPage)
        );

        $this->assertModelMissing($contactPage);

        $response->assertNoContent();
    }
}
