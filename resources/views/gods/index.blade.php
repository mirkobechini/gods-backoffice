@extends('layouts.app')
@section('content')
    <div class="container py-4">

        <h1>Dei</h1>
        <p>Qui puoi gestire i tuoi dei.</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Immagine</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gods as $god)
                    <tr>
                        <td>{{ $god->name }}</td>
                        <td><img src="{{ $god->image }}" alt="{{ $god->name }}" width="50"></td>
                        <td>
                            <a href="{{ route('gods.show', $god->id) }}" class="btn btn-primary">Visualizza dio</a>
                            <a href="{{ route('gods.edit', $god->id) }}" class="btn btn-warning">Modifica</a>
                            <button type="button" data-bs-toggle="modal"
                                data-bs-target="#confirmDeleteModal-{{ $god->id }}"
                                class="btn btn-danger">Elimina</button>
                        </td>
                    </tr>

                    <!-- Modal per dio {{ $god->id }} -->
                    <div class="modal fade" id="confirmDeleteModal-{{ $god->id }}" tabindex="-1"
                        aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="confirmDeleteModalLabel">Cancellazione del dio</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Sei sicuro di voler eliminare il dio "{{ $god->name }}"? Questa azione non può essere
                                    annullata.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Annulla</button>
                                    <form action="{{ route('gods.destroy', $god->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" value="Elimina definitivamente">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
