@extends('layouts.layout')

@section('titlePage', 'Información del local')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">

                <div class="card m-3 text-center" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $local->img }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $local->name }}</h5>
                        <p class="card-text">{{ $local->description }}</p>
                        <a href="{{ Route ("index") }}" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
