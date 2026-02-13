@extends('layouts.app')
@section('content')
    <div class="container py-4">

        <h1>Crea nuovo dominio</h1>
        <form class="my-4 form-control" action="{{ route('domains.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="icon" class="form-label">Icona</label>
                <input type="text" class="form-control" id="icon" name="icon" required>
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Colore</label>
                <input type="color" class="form-control" id="color" name="color" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary py-2 px-4">Crea dominio</button>
            </div>
        </form>
    </div>
@endsection
