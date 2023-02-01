@extends('layouts.admin');

@section('content')
<div class="container">
  <div class="py-4">
    <h1>{{$project->title}}</h1>
    <h3>
      @if($project->type)
        Categoria: {{$project->type->name}}
      @else 
        Nessuna Categoria
      @endif
    </h3>

    <div>
      @if ($project->cover_image)
      <img class="w-25" src="{{ asset("storage/$project->cover_image") }}" alt="{{$project->title}}">   
      @endif
    </div>
    <div class="mt-4">
        <h4>Descrizione: </h4>{{$project->description}}
    </div>
    <div class="mt-4">
      <h5>Tecnologie: </h4>
        @foreach($project->technologies as $technology)
          <div>{{$technology->name}}</div>
        @endforeach
    </div>
    <h2>Customer: {{$project->customer}}</h2>
  </div>
</div>
@endsection