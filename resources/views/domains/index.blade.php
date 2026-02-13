@extends('layouts.app')
@section('content')
    <div class="container py-4">

        <h1>Domini</h1>
        <p>Qui puoi gestire i tuoi domini.</p>
        <a href="{{ route('domains.create') }}" class="btn btn-success">Crea nuovo dominio</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Icona</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($domains as $domain)
                    <tr >
                        <td>{{ $domain->name }}</td>
                        <td class="text-center"><i class="{{ $domain->icon }}" style="color: {{ ($domain->color == '#FFFFFF') ? '#000000' : $domain->color }};"></i></td>
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
@endsection