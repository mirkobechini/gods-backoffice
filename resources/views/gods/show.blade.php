@extends('layouts.app')
@section('content')
    @php
        $imagePath = 'storage/';
        if (!file_exists(public_path($imagePath . $god->image)) || !is_file(public_path($imagePath . $god->image))) {
            $god->image = 'gods-thumb/default.png';
        }
        $imagePath . $god->image;
    @endphp
    <div class="container py-4">
        <a href="{{ route('gods.index') }}" class="btn btn-secondary mb-3" aria-label="Vai alla lista degli dei">Torna alla lista degli dei</a>

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
                    <div class="col-3">
                        <div class="card-img-top">
                            <img class="img-fluid" src="{{ asset($imagePath . $god->image) }}" alt="{{ $god->name }}">
                        </div>
                    </div>
                    <div class="col-6 mt-4">
                        <p class="m-0">{{ $god->description }}</p>
                    </div>

                </div>
                <div class="row mt-2 ms-2">
                    <span class="d-block"><strong>Pantheon:</strong><a class="text-decoration-none text-dark"
                            href="{{ route('pantheons.show', $god->pantheon) }}"> {{ $god->pantheon->name }}</a></span>
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
        </div>
    </div>

    <x-delete-modal type="god" :object="$god" />
@endsection
