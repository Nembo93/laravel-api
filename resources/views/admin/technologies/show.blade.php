@extends ('layouts.admin')

@section('content')
 <h4>Tipo di progetto: {{$technology->name}}</h4>
 @if($technology->projects->isNotEmpty())
 <ul>
    @foreach ($technology->projects as $project)
    <a href="{{ route('admin.projects.show', $project) }}"><li>{{$project->title}}</li></a>    
    @endforeach
 </ul>
    
 @endif
@endsection