@extends('layouts.app')
@section('content')
    <div class="container py-4">

        <h1>Domini</h1>
        <p>Qui puoi gestire i tuoi domini.</p>
        <a href="{{ route('domains.create') }}" class="btn btn-success">Crea nuovo dominio</a>
        <div class="table-responsive">
        <table class="table table-sm align-middle my-4 table-striped w-auto">
            <thead>
                <tr>
                    <th scope="col" class="w-auto text-nowrap">
                        <span>Nome</span>
                        <a class=" ms-2 btn btn-dark rounded-pill px-2 py-0"
                            href="{{ route(
                                'domains.index',
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
                    <th scope="col" class="text-nowrap">Icona</th>
                    <th scope="col" class="w-50 text-nowrap">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($domains as $domain)
                    <tr >
                        <td>{{ $domain->name }}</td>
                        <td><i class="{{ $domain->icon }}" style="color: {{ ($domain->color == '#FFFFFF') ? '#000000' : $domain->color }};"></i></td>
                        <td>
                            <a href="{{ route('domains.show', $domain->id) }}" class="btn btn-primary">Visualizza dominio</a>
                            <a href="{{ route('domains.edit', $domain->id) }}" class="btn btn-warning">Modifica</a>
                            <button type="button" data-bs-toggle="modal"
                                data-bs-target="#confirmDeleteModal-{{ $domain->id }}"
                                class="btn btn-danger">Elimina</button>
                        </td>
                    </tr>

                    <x-delete-modal type="domain" :object="$domain" />
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection