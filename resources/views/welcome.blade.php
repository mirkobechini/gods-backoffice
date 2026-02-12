@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">
            Benvenuto, questo è il Gods Backoffice
        </h1>

        <p class="col-md-8 fs-4">
            Qui potrai gestire i tuoi dei, i loro domini e le loro mitologie.
        </p>

        @if(Auth::check())
            <a href="" class="btn btn-primary">Gestisci Dei</a>
            <a href="" class="btn btn-secondary">Gestisci Mitologie</a>
            <a href="" class="btn btn-success">Gestisci Domini</a>
        @else
            <a href="{{ route('login') }}" class="btn btn-primary">Accedi</a>
        @endif
    </div>
</div>
@endsection