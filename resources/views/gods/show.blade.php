@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <a href="{{ route('gods.index') }}" class="btn btn-secondary mb-3">Torna alla lista dei dei</a>

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h1>{{ $god->name }} - {{ $god->title }}</h1>
                <div class="">
                    <a class="btn btn-warning" href="{{ route('gods.edit', $god) }}"><i class="fa-solid fa-pencil"></i></a>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal-{{ $god->id }}"
                        class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="card-img-top col">
                        <img class="my-3 img-fluid" src="{{ $god->image }}" alt="{{ $god->name }}">
                    </div>
                    <div class="col-9">
                        <span class="d-block"><strong>Pantheon:</strong> {{ $god->pantheon->name }}</span>
                        <span class="d-block"><strong>Rango:</strong> {{ $god->rank }}</span>
                        <span class="d-block"><strong>Domini:</strong>
                            @foreach ($god->domains as $domain)
                                <a href="{{ route('domains.show', $domain) }}"><i
                                        class="{{ $domain->icon }} bg-secondary py-1"
                                        style="color: {{ $domain->color }};"></i></a>
                            @endforeach
                        </span>
                    </div>
                </div>
                <p>{{ $god->description }}</p>
            </div>
        </div>
    </div>

    <x-delete-modal type="god" :object="$god" />
@endsection
