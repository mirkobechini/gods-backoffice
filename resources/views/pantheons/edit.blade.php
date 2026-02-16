@extends('layouts.app')
@section('content')
    @php
        $imagePath = 'storage/';
        if (
            !file_exists(public_path($imagePath . $pantheon->image)) ||
            !is_file(public_path($imagePath . $pantheon->image))
        ) {
            $pantheon->image = 'pantheons-img/default.png';
        }
        $imagePath . $pantheon->image;
    @endphp
    <div class="container py-4">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                Controlla i campi del form.
            </div>
        @endif

        <h1>Modifica pantheon</h1>
        <form id="editPantheonForm" class="my-4 form-control" action="{{ route('pantheons.update', $pantheon) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name', $pantheon->name) }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="region" class="form-label">Regione</label>
                <input type="text" class="form-control @error('region') is-invalid @enderror" id="region"
                    name="region" value="{{ old('region', $pantheon->region) }}" required>
                @error('region')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="home_base" class="form-label">Base</label>
                <input type="text" class="form-control @error('home_base') is-invalid @enderror" id="home_base"
                    name="home_base" value="{{ old('home_base', $pantheon->home_base) }}" required>
                @error('home_base')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <img class="my-3 ms-3 img-fluid" style="width:30px" src="{{ asset($imagePath . $pantheon->image) }}"
                    alt="{{ $pantheon->name }}">

                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                    name="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                    rows="3">{{ old('description', $pantheon->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary py-2 px-4" aria-label="Aggiorna pantheon">Aggiorna
                    pantheon</button>
            </div>
        </form>
    </div>
@endsection
