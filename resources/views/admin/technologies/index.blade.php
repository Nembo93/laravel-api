@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="mb-3">
            <h1>Tecnologie:</h1>
        </div>
        <div class="mb-3">
            <ul>
                @foreach ($technologies as $technology)
                <li class="mb-1">
                    <a href="{{ route('admin.technologies.show', $technology) }}" class="btn btn-primary mx-3">{{$technology->name}}</a>
                    <a href="{{ route('admin.technologies.edit', $technology) }}" class="btn btn-warning">Modifica</a>
                    {{-- Delete button --}}
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{$technology->id}}">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </li>
                <!-- Modal -->
                <div class="modal fade" id="modal-{{$technology->id}}" tabindex="-1">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Stai per eliminare questa tecnologia</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        Sei sicuro di eliminare la tecnologia "{{$technology->name}}"?
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <form action="{{ route('admin.technologies.destroy', $technology) }}" method="POST" class="d-inline-block">
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
            <a href="{{ route('admin.technologies.create')}}" class="btn btn-success">Aggiungi tecnologia</a>
        </div>
        
@endsection