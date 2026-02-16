@extends('layouts.app')
@section('content')
    @php
        $imagePath = 'storage/';
        if (!file_exists(public_path($imagePath . $god->image)) || !is_file(public_path($imagePath . $god->image))) {
            $god->image = 'gods-thumb/default.png';
        }
        $imagePath . $god->image;
    @endphp
    <div class="container py-4">

        <h1>Modifica dio</h1>
        <form id="editGodForm" class="my-4 form-control" action="{{ route('gods.update', $god->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $god->name }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $god->title }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <img class="my-3 ms-3 img-fluid" style="width:30px" src="{{ asset($imagePath . $god->image) }}"
                    alt="{{ $god->name }}">

                <input type="file" class="form-control" id="image" name="image" value="{{ $god->image }}">
            </div>
            <div class="mb-3">
                <label for="rank" class="form-label">Rango</label>
                <input type="number" class="form-control" id="rank" name="rank" value="{{ $god->rank }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $god->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="pantheon_id" class="form-label">Pantheon</label>
                <select name="pantheon_id" id="pantheon_id" class="form-select">
                    @foreach ($pantheons as $pantheon)
                        <option value="{{ $pantheon->id }}" {{ $god->pantheon_id == $pantheon->id ? 'selected' : '' }}>
                            {{ $pantheon->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="domain_id" class="form-label">Dominio</label>
                <div class="form-control d-flex flex-wrap gap-3">
                    @foreach ($domains as $domain)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="domains[]" value="{{ $domain->id }}"
                                id="domain-{{ $domain->id }}"
                                {{ $god->domains->contains($domain->id) ? 'checked' : '' }}>
                            <label class="form-check-label" for="domain-{{ $domain->id }}">
                                <i class="{{ $domain->icon }} bg-secondary py-1" style="color: {{ $domain->color }};"></i>
                                {{ $domain->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary py-2 px-4" aria-label="Aggiorna dio">Aggiorna dio</button>
            </div>
        </form>
    </div>
@endsection
