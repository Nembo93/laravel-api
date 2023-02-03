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
                    {{-- Delete button --}}
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$type->id}}">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </li>
                <!-- Modal -->
                <div class="modal fade" id="modal-{{$type->id}}" tabindex="-1">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Stai per eliminare questa tipologia</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        Sei sicuro di eliminare la tipologia "{{$type->name}}"?
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <form action="{{ route('admin.types.destroy', $type) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">Si</button>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
                 @endforeach
            </ul>  
        </div>

        <div class="mb-3">
            <a href="{{ route('admin.types.create')}}" class="btn btn-success">Aggiungi tipologia di progetto</a>
        </div>
        
@endsection