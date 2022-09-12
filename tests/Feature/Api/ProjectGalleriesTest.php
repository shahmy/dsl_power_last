<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Project;
use App\Models\Gallery;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectGalleriesTest extends TestCase
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
    public function it_gets_project_galleries()
    {
        $project = Project::factory()->create();
        $galleries = Gallery::factory()
            ->count(2)
            ->create([
                'project_id' => $project->id,
            ]);

        $response = $this->getJson(
            route('api.projects.galleries.index', $project)
        );

        $response->assertOk()->assertSee($galleries[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_project_galleries()
    {
        $project = Project::factory()->create();
        $data = Gallery::factory()
            ->make([
                'project_id' => $project->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.projects.galleries.store', $project),
            $data
        );

        $this->assertDatabaseHas('galleries', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $gallery = Gallery::latest('id')->first();

        $this->assertEquals($project->id, $gallery->project_id);
    }
}
