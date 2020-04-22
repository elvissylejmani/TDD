@extends('../layouts.app')

@section('content')
<div style="display: flex; align-items: center">
    <h1 style="margin-right: auto">BirdBoard</h1>
    <a href="/Projects/create">New Project</a>
</div>
@forelse ($projects as $project)
<li>
<a href="{{$project->path()}}">    
    {{ $project->title}}
</a>
</li>
@empty
No Project yet.

@endforelse


@endsection