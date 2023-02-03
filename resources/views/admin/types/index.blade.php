@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="mb-3">
            <h1>Tipologie di progetto:</h1>
        </div>
        <div class="mb-3">
            <ul>
                @foreach ($types as $type)
                <li class="mb-1">
                    <a href="{{ route('admin.types.show', $type) }}" class="btn btn-primary mx-3">{{$type->name}}</a>
                    <a href="{{ route('admin.types.edit', $type) }}" class="btn btn-warning">Modifica</a>
                    <a href="#" class="btn btn-danger">Elimina</a>
                </li>
                 @endforeach
            </ul>  
        </div>
        <div class="mb-3">
            <a href="{{ route('admin.types.create')}}" class="btn btn-succes">Aggiungi tipologia di progetto</a>
        </div>
    </div>
@endsection