@extends('layouts.app')
@section('content')
    <div class="container py-4">

        <h1>Dei</h1>
        <p>Qui puoi gestire i tuoi dei.</p>
        <a href="{{ route('gods.create') }}" class="btn btn-success">Crea nuovo dio</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">
                        <span>Nome</span>
                        <a class=" ms-2 btn btn-dark rounded-pill px-2 py-0"
                            href="{{ route(
                                'gods.index',
                                array_merge(request()->query(), [
                                    'sort' => 'name',
                                    'order' => $sort === 'name' && $order === 'asc' ? 'desc' : 'asc',
                                ]),
                            ) }}">
                            @if ($sort === 'name')
                                {{ $order === 'asc' ? '↑' : '↓' }}
                            @else
                                ↕
                            @endif
                        </a>
                    </th>
                    <th scope="col">Immagine</th>
                    <th scope="col">
                        <span>Pantheon</span>
                        <a class=" ms-2 btn btn-dark rounded-pill px-2 py-0"
                            href="{{ route(
                                'gods.index',
                                array_merge(request()->query(), [
                                    'sort' => 'pantheon_id',
                                    'order' => $sort === 'pantheon_id' && $order === 'asc' ? 'desc' : 'asc',
                                ]),
                            ) }}">
                            @if ($sort === 'pantheon_id')
                                {{ $order === 'asc' ? '↑' : '↓' }}
                            @else
                                ↕
                            @endif
                        </a>
                    </th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gods as $god)
                    <tr>
                        <td>{{ $god->name }}</td>
                        <td><img src="{{ $god->image }}" alt="{{ $god->name }}" width="50"></td>
                        <td>{{ $god->pantheon->name }}</td>
                        <td>
                            <a href="{{ route('gods.show', $god->id) }}" class="btn btn-primary">Visualizza dio</a>
                            <a href="{{ route('gods.edit', $god->id) }}" class="btn btn-warning">Modifica</a>
                            <button type="button" data-bs-toggle="modal"
                                data-bs-target="#confirmDeleteModal-{{ $god->id }}"
                                class="btn btn-danger">Elimina</button>
                        </td>
                    </tr>

                    <x-delete-modal type="god" :object="$god" />
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
