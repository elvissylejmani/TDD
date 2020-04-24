@extends('../layouts.app')

@section('content')
    
<header class="flex items-center mb-3 py-3">
    <div class="flex justify-between items-end w-full">
    <p class="text-gray-600 font-normal">
      <a href="/Projects">  My Projects</a> \ {{$project->title}}
    </p>
    <a href="/Projects/create" class="button">New Project</a>
    </div>
</header>

<main class="lg:flex -ml-3">
    <div class="lg:w-3/4 px-3 mb-8">
        <div class="mb-6">
        <h2 class="text-lg text-gray-600 font-normal mb-3">Tasks</h2>
        <div class="card mb-3">Lorem ipsum</div>
        <div class="card mb-3">Lorem ipsum</div>
        <div class="card mb-3">Lorem ipsum</div>
        <div class="card">Lorem ipsum</div>
    </div>

    <div>
        <h2 class="text-lg text-gray-600 font-normal mb-3">General notes</h2>
        <textarea class="card w-full" style="min-height: 200px">
            Lorem ipsum
        </textarea>
    </div>
    </div>
    <div class="lg:w-1/4 px-3">
        @include('projects.card')
    </div>
</main>




@endsection