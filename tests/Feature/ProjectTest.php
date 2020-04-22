<?php

namespace Tests\Feature;

use App\project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function guests_cannot_create_projects()
    {
        $attributes = factory(project::class)->raw(['owner_id' => '']);

        $this->post('/Projects',$attributes)->assertRedirect('login');
    }
      /** @test */
    public function guests_cannot_view_projects()
    {
        $this->get('/Projects')->assertRedirect ('login');
    }
      /** @test */
    public function guests_cannot_view_a_single_project()
    {
        $project = factory(project::class)->create();

        $this->get($project->path())->assertRedirect ('login');
    }

    /** @test */ 
    public function a_user_can_create_a_project()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory('App\User')->create());

        $attributes = [
            'title' => $this->faker->text,
            'description' => $this->faker->text,
            'owner_id' => 1,
        ]; 
        $this->post('/Projects',$attributes)->assertRedirect('/Projects');

        $this->assertDatabaseHas('projects',$attributes);

        $this->get('/Projects')->assertSee($attributes['title']);
    }
    /** @test */
    public function a_project_requires_a_title()
    {
        $this->actingAs(factory('App\User')->create());

        $attributes = factory(project::class)->raw(['title' => '']);

        $this->post('/Projects',$attributes)->assertSessionHasErrors('title');
    }
    /** @test */
    public function a_project_requires_a_description()
    {
        $this->actingAs(factory('App\User')->create());
        
        $attributes = factory(project::class)->raw(['description' => '']);

        $this->post('/Projects',[])->assertSessionHasErrors('description');
    }
 

    /** @test */
    public function a_user_can_view_their_project()
    {
        $this->be(factory('App\User')->create());

        $project = factory(project::class)->create(['owner_id' => auth()->id()]);

        $this->get('/Projects/'. $project->id)
        ->assertSee($project->title)
        ->assertSee($project->description);
    }
}
