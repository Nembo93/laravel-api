@extends('layouts.admin')

@section('content')
    <div class="mb-2">
        <h2>Aggiungi una nuova tipologia</h2>
        @if ($types)
            <ul>
                @foreach ($types as $type)
                    <li>{{$type->name}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <div class="mb-3">
        <form action="{{ route('admin.types.store')}}" method="POST">
            @csrf
            <label for="type_name">Tipo di progetto</label>
            <input type="text" class="form-control mb-3" id="type_name" name="name" value="{{ old('name') }}">
            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>
    </div>
@endsection