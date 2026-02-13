@extends('layouts.app')
@section('content')
    <div class="container py-4">

        <h1>Pantheon</h1>
        <p>Qui puoi gestire i tuoi pantheon.</p>
        <a href="{{ route('pantheons.create') }}" class="btn btn-success">Crea nuovo pantheon</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Immagine</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pantheons as $pantheon)
                    <tr>
                        <td>{{ $pantheon->name }}</td>
                        <td><img src="{{ $pantheon->image }}" alt="{{ $pantheon->name }}" width="50"></td>
                        <td>
                            <a href="{{ route('pantheons.show', $pantheon->id) }}" class="btn btn-primary">Visualizza pantheon</a>
                            <a href="{{ route('pantheons.edit', $pantheon->id) }}" class="btn btn-warning">Modifica</a>
                            <button type="button" data-bs-toggle="modal"
                                data-bs-target="#confirmDeleteModal-{{ $pantheon->id }}"
                                class="btn btn-danger">Elimina</button>
                        </td>
                    </tr>

                    <x-delete-modal type="pantheon" :object="$pantheon" />
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
