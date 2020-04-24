@extends('../layouts.app')

@section('content')
    
<header class="flex items-center mb-3 py-3">
    <div class="flex justify-between items-end w-full">
    <h2 class="text-gray-600 font-normal">My Projects</h2>
    <a href="/Projects/create" class="button">New Project</a>
    </div>
</header>

<main>
    <div></div>
    <div></div>
</main>


<h1>{{$project->title}}</h1>

<p>{{$project->description}}</p>

    <a href="/Projects">Go back</a>    

@endsection