@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="py-4">
    <h1>Crea nuovo progetto</h1>
    
    <div class="mt-4">
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Nome progetto</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il nome del progetto" value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione del progetto</label>
                <textarea class="form-control" id="content" name="description" rows="10" placeholder="Inserisci la descrizione del progetto">{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="customer" class="form-label">Nome Cliente</label>
                <input type="text" class="form-control" id="customer" name="customer" placeholder="Inserisci il nome del cliente" value="{{ old('customer') }}">
            </div>
            <div class="mb-3">
                <label for="cover_image" class="form-label">Immagine</label>
                <input type="file" class="form-control" id="cover_image" name="cover_image">
            </div>

            {{-- Selects Types --}}
            <div class="mb-3">
                <label for="type_id" class="form-label">Categoria progetto</label>
                <select class="form-select" name="type_id" id="type_id">
                    <option value="">Senza Categoria</option>
                    @foreach ($types as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>

            {{-- Checkbox Techonologies --}}
            <div class="mb-3">
                @foreach ($technologies as $technology)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="technologies[]" id="{{$technology->slug}}" value="{{$technology->id}}">
                    <label class="form-check-label" for="{{$technology->slug}}">{{$technology->name}}</label>
                </div>
                @endforeach
            </div>

            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>
  </div>
</div>
@endsection