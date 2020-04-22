<?php

namespace Tests\Unit;

use App\project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;


   /** @test */
   public function it_has_a_path()
   {
       $project = factory(project::class)->create();

       $this->assertEquals('/Projects/'.$project->id,$project->path());
   }
}
