<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */ 
    public function a_user_can_create_a_project()
    {
        $this->withoutExceptionHandling();
        $attributes = [
            'title' => $this->faker->name,
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
        $this->post('/Projects',[])->assertSessionHasErrors('title');
    }
    /** @test */
    public function a_project_requires_a_description()
    {
        $this->post('/Projects',[])->assertSessionHasErrors('description');
    }
}
