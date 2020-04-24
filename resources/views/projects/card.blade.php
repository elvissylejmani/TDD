    <div class="card" style="height:200px">
        <h3 class="font-normal text-xl py-4 mb-3 -ml-5 border-l-4 border-blue-400 pl-4">
            <a href="{{ $project->path()}}">    {{ \Illuminate\Support\Str::limit($project->title, 50  ) }} </a>
            </h3>
         <div class="text-gray-600">
            {{ \Illuminate\Support\Str::limit($project->description, 100) }}
            </div>
        </div>
  