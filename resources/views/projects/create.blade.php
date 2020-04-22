@extends('../layouts.app')

@section('content')

<form action="/Projects" method="POST" class="container" style="padding-top: 40px">
    @csrf
    <h1 class="heading is-1">Create a Project</h1>
    <div class="field">
        <label class="title" for="title">Title</label>
        <div class="control">
            <input type="text" name="title" id="" class="input" placeholder="Title">
        </div>
    </div>
    
    <div class="field">
        <label class="title" for="description">Description</label>
        <div class="control">
            <textarea name="description" class="textarea"></textarea>
        </div>
    </div>
    <div class="field">
        <div class="control">
            <button type="submit" name="" class="button is-link" id=""> Create Project </button>
        </div>
    </div>

</form>


@endsection