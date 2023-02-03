@extends('layouts.admin')

@section('content')
    <div class="mb-2">
        <h2>Modifica questa tipologia</h2>
    </div>
    <div class="mb-3">
        <form action="{{ route('admin.types.update', $type)}}" method="POST">
            @csrf
            @method('PUT')
            <label for="type_name">Tipo di progetto</label>
            <input type="text" class="form-control mb-3" id="type_name" name="name" value="{{old('name', $type->name)}}">
            <button type="submit" class="btn btn-success">Modifica</button>
        </form>
    </div>
@endsection