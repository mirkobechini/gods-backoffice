@extends('layouts.app')
@section('content')
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
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <a href="{{ route('pantheons.index') }}" class="btn btn-secondary mb-3">Torna alla lista dei pantheon</a>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h1>{{ $pantheon->name }}</h1>
                        <div class="">
                            <a class="btn btn-warning" href="{{ route('pantheons.edit', $pantheon) }}"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <button type="button" data-bs-toggle="modal"
                                data-bs-target="#confirmDeleteModal-{{ $pantheon->id }}" class="btn btn-danger"><i
                                    class="fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="card-img-top ">
                                    <img class="img-fluid" src="{{ asset($imagePath . $pantheon->image) }}"
                                    alt="{{ $pantheon->name }}">
                                </div>
                            </div>
                            <div class="col-6 mt-4">
                                <p>{{ $pantheon->description }}</p>
                            </div>
                            <div class="row mt-2 ms-2">
                                <span class="d-block"><strong>Regione:</strong> {{ $pantheon->region }}</span>
                                <span class="d-block"><strong>Base:</strong> {{ $pantheon->home_base }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <h2 class="">Dei</h2>
            </div>
        </div>
        @if (!$pantheon->gods->isEmpty())
            <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-4 g-2">
                @foreach ($pantheon->gods as $god)
                    <div class="col">
                        <x-gods-visual-card :god="$god" />
                    </div>
                @endforeach
            </div>
        @else
        <div class="row mt-4">
            <div class="col">
                <a href="{{ route('gods.create', ['pantheon_id' => $pantheon->id]) }}" class="btn btn-primary">Aggiungi un
                    dio a questo pantheon</a>
            </div>
        </div>
        @endif
    </div>

    <x-delete-modal type="pantheon" :object="$pantheon" />
@endsection
