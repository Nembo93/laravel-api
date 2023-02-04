@extends('layouts.admin')

@section('content')
    <div class="mb-2">
        <h2>Modifica questa tecnologia</h2>
    </div>
    <div class="mb-3">
        <form action="{{ route('admin.technologies.update', $technology)}}" method="POST">
            @csrf
            @method('PUT')
            <label for="type_name">Tecnologia</label>
            <input type="text" class="form-control mb-3" id="technology_name" name="name" value="{{old('name', $technology->name)}}">
            <button type="submit" class="btn btn-success">Modifica</button>
        </form>
    </div>
@endsection