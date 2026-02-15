@extends('layouts.app')
@section('content')
    <div class="container py-4">

        <h1>Dei</h1>
        <p>Qui puoi gestire i tuoi dei.</p>
        <a href="{{ route('gods.create') }}" class="btn btn-success">Crea nuovo dio</a>
        <div class="table-responsive">

            <table class="table table-sm align-middle my-4 table-striped ">
                <thead>
                    <tr>
                        <th scope="col" class="w-25 text-nowrap">
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
                        <th scope="col" class="w-auto text-nowrap">Immagine</th>
                        <th scope="col" class="w-auto text-nowrap">
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
                        <th scope="col" class="text-center text-nowrap">
                            <span>Rango</span>
                            <a class=" ms-2 btn btn-dark rounded-pill px-2 py-0"
                                href="{{ route(
                                    'gods.index',
                                    array_merge(request()->query(), [
                                        'sort' => 'rank',
                                        'order' => $sort === 'rank' && $order === 'asc' ? 'desc' : 'asc',
                                    ]),
                                ) }}">
                                @if ($sort === 'rank')
                                    {{ $order === 'asc' ? '↑' : '↓' }}
                                @else
                                    ↕
                                @endif
                            </a>
                        </th>
                        <th scope="col" class="w-auto text-nowrap">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gods as $god)
                    
                    @php
                     $imagePath ="storage/";
                     if(!file_exists(public_path($imagePath . $god->image)) || !is_file(public_path($imagePath . $god->image))){
                        $god->image = 'gods-thumb/default.png';
                     }
                     $imagePath . $god->image;
                    @endphp


                        <tr>
                            <td>{{ $god->name }}</td>
                            <td><img src="{{ asset($imagePath . $god->image) }}" alt="{{ $god->name }}" width="50"></td>
                            <td><a class="text-decoration-none text-dark" href="{{ route('pantheons.show', $god->pantheon->id) }}">{{ $god->pantheon->name }}</a></td>
                            <td class="text-center">{{ $god->rank }}</td>
                            <td class="text-nowrap">
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
    </div>
@endsection
