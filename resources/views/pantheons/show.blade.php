@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <a href="{{ route('pantheons.index') }}" class="btn btn-secondary mb-3">Torna alla lista dei pantheon</a>

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h1>{{ $pantheon->name }}</h1>
                <div class="">
                    <a class="btn btn-warning" href="{{ route('pantheons.edit', $pantheon) }}"><i
                            class="fa-solid fa-pencil"></i></a>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal-{{ $pantheon->id }}"
                        class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="card-img-top col">
                        <img class="my-3 img-fluid" src="{{ $pantheon->image }}" alt="{{ $pantheon->name }}">
                    </div>
                    <div class="col-9">
                        <span class="d-block"><strong>Regione:</strong> {{ $pantheon->region }}</span>
                        <span class="d-block"><strong>Base:</strong> {{ $pantheon->home_base }}</span>
                    </div>
                </div>
                <p>{{ $pantheon->description }}</p>
            </div>
        </div>
    </div>

    <x-delete-modal type="pantheon" :object="$pantheon" />
@endsection
