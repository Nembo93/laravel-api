@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="mb-3">
            <h1>Tipologie di progetto:</h1>
        </div>
        <ul>
            @foreach ($types as $type)
            <li class="mb-1">
                <a href="{{ route('admin.types.show', $type) }}" class="btn btn-primary">{{$type->name}}</a>
            </li>
             @endforeach
        </ul>   
    </div>
@endsection