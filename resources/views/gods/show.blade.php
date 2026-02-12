@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <div class="card">
            <div class="card-header">
                <h1>{{ $god->name }}</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="card-img-top col">
                        <img class="my-3 img-fluid" src="{{ $god->image }}" alt="{{ $god->name }}">
                    </div>
                    <div class="col-9">
                        <span class="d-block"><strong>Titolo:</strong> {{ $god->title }}</span>
                        <span class="d-block"><strong>Rango:</strong> {{ $god->rank }}</span>
                        <span class="d-block"><strong>Domini:</strong> 
                            @foreach($god->domains as $domain)
                            <i class="{{ $domain->icon }} bg-secondary py-1" style="color: {{ $domain->color }};"></i>
                            @endforeach
                        </span>
                    </div>
                </div>
                <p>{{ $god->description }}</p>
            </div>
        </div>
        <a href="{{ route('gods.index') }}" class="btn btn-secondary">Torna alla lista dei dei</a>
    </div>
@endsection
