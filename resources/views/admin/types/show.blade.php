@extends ('layouts.admin')

@section('content')
 <h4>Tipo di progetto: {{$type->name}}</h4>
 @if($type->projects->isNotEmpty())
 <ul>
    @foreach ($type->projects as $project)
    <a href="{{ route('admin.projects.show', $project) }}"><li>{{$project->title}}</li></a>    
    @endforeach
 </ul>
    
 @endif
@endsection