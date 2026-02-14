@extends('layouts.app')
@section('content')
    <div class="container py-4">

        <h1>Pantheon</h1>
        <p>Qui puoi gestire i tuoi pantheon.</p>
        <a href="{{ route('pantheons.create') }}" class="btn btn-success">Crea nuovo pantheon</a>
        <div class="table-responsive">

            <table class="table table-sm align-middle my-4 table-striped w-auto">
                <thead>
                    <tr>
                        <th scope="col" class="w-auto text-nowrap">
                            <span>Nome</span>
                            <a class=" ms-2 btn btn-dark rounded-pill px-2 py-0"
                                href="{{ route(
                                    'pantheons.index',
                                    array_merge(request()->query(), [
                                        'order' => $order === 'asc' ? 'desc' : 'asc',
                                    ]),
                                ) }}">
                                @if ($order === 'asc')
                                    {{ '↑' }}
                                @else
                                    {{ '↓' }}
                                @endif
                            </a>
                        </th>
                        <th scope="col" class="w-auto text-nowrap">Immagine</th>
                        <th scope="col" class="w-50 text-nowrap">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pantheons as $pantheon)
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
                        <tr>
                            <td>{{ $pantheon->name }}</td>
                            <td><img src="{{ asset($imagePath . $pantheon->image) }}" alt="{{ $pantheon->name }}" width="50"></td>
                            <td class="text-nowrap">
                                <a href="{{ route('pantheons.show', $pantheon->id) }}" class="btn btn-primary">Visualizza
                                    pantheon</a>
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
    </div>
@endsection
