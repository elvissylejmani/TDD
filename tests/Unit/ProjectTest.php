<?php

namespace Tests\Unit;

use App\project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;


   /** @test */
   public function it_has_a_path()
   {

       $project = factory(project::class)->create();

       $this->assertEquals('/Projects/'.$project->id,$project->path());
   }

   /** @test */
   public function it_belongs_to_an_owner()
   {
       $project = factory(project::class)->create();

       $this->assertInstanceOf('App\User',$project->owner);
   }
   
}
