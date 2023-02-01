@extends('layout.admin')

@section('page_content')
    <div class="container">
        <div class="mb-3">
            <h1>Tipologie di progetto:</h1>
        </div>
        @foreach ($types as $type)
            <div>
                <a class="btn btn-primary">{{$type}}</a>
            </div>
        @endforeach
    </div>
@endsection