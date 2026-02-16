@extends('layouts.app')
@section('content')
    <div class="container py-4">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                Controlla i campi del form.
            </div>
        @endif

        <h1>Crea nuovo pantheon</h1>
        <form id="createPantheonForm" class="my-4 form-control" action="{{ route('pantheons.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="region" class="form-label">Regione</label>
                <input type="text" class="form-control @error('region') is-invalid @enderror" id="region" name="region"
                    value="{{ old('region') }}" required>
                @error('region')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="home_base" class="form-label">Base</label>
                <input type="text" class="form-control @error('home_base') is-invalid @enderror" id="home_base"
                    name="home_base" value="{{ old('home_base') }}" required>
                @error('home_base')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                    rows="3">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary py-2 px-4" aria-label="Crea pantheon">Crea pantheon</button>
            </div>
        </form>
    </div>
@endsection
