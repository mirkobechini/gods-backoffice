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

        <h1>Modifica pantheon</h1>
        <form class="my-4 form-control" action="{{ route('pantheons.update', $pantheon) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $pantheon->name }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="region" class="form-label">Regione</label>
                <input type="text" class="form-control" id="region" name="region" value="{{ $pantheon->region }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="home_base" class="form-label">Base</label>
                <input type="text" class="form-control" id="home_base" name="home_base"
                    value="{{ $pantheon->home_base }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <img class="my-3 ms-3 img-fluid" style="width:30px" src="{{ asset($imagePath . $pantheon->image) }}"
                    alt="{{ $pantheon->name }}">

                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $pantheon->description }}</textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary py-2 px-4">Aggiorna pantheon</button>
            </div>
        </form>
    </div>
@endsection
