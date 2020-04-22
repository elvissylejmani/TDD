@extends('layouts.app')

@section('content')

@foreach ($projects as $project)
<li>
<a href="{{$project->path()}}">    
    {{ $project->title}}
</a>
</li>
@endforeach


@endsection