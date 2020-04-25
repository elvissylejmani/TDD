<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectTasksTest extends TestCase
{
 use RefreshDatabase;
 
    /** @test */
    public function a_project_can_have_tasks()
    {
        $this->withoutExceptionHandling();
        
        $this->signIn();

        $project = factory('App\project')->create(['owner_id' => auth()->id()]);

        $this->post($project->path() . 'tasks', ['body' => 'test task']);

        $this->get('/Projects' . $project->path())
        ->assertSee('test task');
    }

}
