@extends('layouts.app')
@section('content')
    <div class="container py-4">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                Controlla i campi del form.
            </div>
        @endif

        <h1>Crea nuovo dio</h1>
        <form id="createGodForm" class="my-4 form-control" action="{{ route('gods.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="file" class="form-control  @error('image') is-invalid @enderror" id="image" name="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="rank" class="form-label">Rango</label>
                <input type="number" class="form-control  @error('rank') is-invalid @enderror" id="rank" name="rank" value="{{ old('rank', 1) }}">
                @error('rank')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control  @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pantheon_id" class="form-label">Pantheon</label>
                <select name="pantheon_id" id="pantheon_id" class="form-select  @error('pantheon_id') is-invalid @enderror" required>
                    @foreach ($pantheons as $pantheon)
                        <option value="{{ $pantheon->id }}" @selected(old('pantheon_id') == $pantheon->id)>{{ $pantheon->name }}</option>
                    @endforeach
                </select>
                @error('pantheon_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="domain_id" class="form-label">Dominio</label>
                <div class="form-control d-flex flex-wrap gap-3">
                    @foreach ($domains as $domain)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="domains[]" value="{{ $domain->id }}"
                                id="domain-{{ $domain->id }}" @checked(in_array((string) $domain->id, array_map('strval', old('domains', []))))>
                            <label class="form-check-label" for="domain-{{ $domain->id }}">
                                <i class="{{ $domain->icon }} bg-secondary py-1" style="color: {{ $domain->color }};"></i>
                                {{ $domain->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary py-2 px-4" aria-label="Crea dio">Crea dio</button>
            </div>
        </form>
    </div>




    
@endsection
