@extends('layouts.app')
@section('content')
    <div class="container py-4">

        <h1>Crea nuovo pantheon</h1>
        <form class="my-4 form-control" action="{{ route('pantheons.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="region" class="form-label">Regione</label>
                <input type="text" class="form-control" id="region" name="region" required>
            </div>
            <div class="mb-3">
                <label for="home_base" class="form-label">Base</label>
                <input type="text" class="form-control" id="home_base" name="home_base" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary py-2 px-4">Crea pantheon</button>
            </div>
        </form>
    </div>
@endsection
