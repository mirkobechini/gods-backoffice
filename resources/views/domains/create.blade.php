@extends('layouts.app')
@section('content')
    <div class="container py-4">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                Controlla i campi del form.
            </div>
        @endif
        <h1>Crea nuovo dominio</h1>
        <form id="createDomainForm" class="my-4 form-control" action="{{ route('domains.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="icon" class="form-label">Icona</label>
                <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon" name="icon" value="{{ old('icon') }}" required>
                @error('icon')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Colore</label>
                <input type="color" class="form-control @error('color') is-invalid @enderror" id="color" name="color" value="{{ old('color') }}" required>
                @error('color')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary py-2 px-4" aria-label="Crea dominio">Crea dominio</button>
            </div>
        </form>
    </div>
@endsection
