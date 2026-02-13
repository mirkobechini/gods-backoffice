@extends('layouts.app')
@section('content')
    <div class="container py-4">

        <h1>Modifica dominio</h1>
        <form class="my-4 form-control" action="{{ route('domains.update', $domain) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $domain->name }}" required>
            </div>
            <div class="mb-3">
                <label for="icon" class="form-label">Icona</label>
                <input type="text" class="form-control" id="icon" name="icon" value="{{ $domain->icon }}" required>
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Colore</label>
                <input type="color" class="form-control" id="color" name="color" value="{{ $domain->color }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $domain->description }}</textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary py-2 px-4">Aggiorna dominio</button>
            </div>
        </form>
    </div>
@endsection
