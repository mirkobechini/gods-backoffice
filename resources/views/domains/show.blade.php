@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col">

                <a href="{{ route('domains.index') }}" class="btn btn-secondary mb-3">Torna alla lista dei domini</a>
            </div>
            <div class="col-12">

                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h1>{{ $domain->name }} <i style="color: {{ $domain->color }}" class="{{ $domain->icon }}"></i></h1>
                        <div class="">
                            <a class="btn btn-warning" href="{{ route('domains.edit', $domain) }}"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <button type="button" data-bs-toggle="modal"
                                data-bs-target="#confirmDeleteModal-{{ $domain->id }}" class="btn btn-danger"><i
                                    class="fa-solid fa-trash"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $domain->description }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <h2 class="">Dei</h2>
            </div>
        </div>
        @if (!$domain->gods->isEmpty())
            <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-4 g-2">
                @foreach ($domain->gods as $god)
                    <div class="col">
                        <x-gods-visual-card :god="$god" />
                    </div>
                @endforeach
            </div>
        @else
        <div class="row mt-4">
            <div class="col">
                <a href="{{ route('gods.create', ['domain_id' => $domain->id]) }}" class="btn btn-primary">Aggiungi un
                    dio a questo dominio</a>
            </div>
        </div>
        @endif
    </div>
    <x-delete-modal type="domain" :object="$domain" />
@endsection
