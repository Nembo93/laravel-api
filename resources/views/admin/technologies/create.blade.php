@extends('layouts.admin')

@section('content')
    <div class="mb-2">
        <h2>Aggiungi una nuova tecnologia</h2>
        @if ($technologies)
            <ul>
                @foreach ($technologies as $technology)
                    <li>{{$technology->name}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <div class="mb-3">
        <form action="{{ route('admin.technologies.store')}}" method="POST">
            @csrf
            <label for="technology_name">Tecnologia</label>
            <input type="text" class="form-control mb-3" id="technology_name" name="name" value="{{ old('name') }}">
            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>
    </div>
@endsection