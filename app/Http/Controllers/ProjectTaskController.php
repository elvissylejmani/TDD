<?php

namespace App\Http\Controllers;
use App\project;
use Illuminate\Http\Request;

class ProjectTaskController extends Controller
{
    public function store(project $project)
    {
         $project->addTask(request(['body']));   

         return redirect($project->path());
    }
}
