@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h1>{{ $domain->name }} <i style="color: {{ $domain->color }}"
                        class="{{ $domain->icon }}"></i></h1>
                <div class="">
                    <a class="btn btn-warning" href="{{ route('domains.edit', $domain) }}"><i class="fa-solid fa-pencil"></i></a>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal-{{ $domain->id }}"
                        class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $domain->description }}</p>
            </div>
        </div>
    </div>
    <x-delete-modal type="domain" :object="$domain" />
@endsection
