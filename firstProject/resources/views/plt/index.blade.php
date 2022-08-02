@extends('layouts.layout')

@section('title', 'index')

@section('titlePage')

    <h1>prueba de titulo</h1>

@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($locals as $local)
                <div class="card m-3" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $local->img }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $local->name }}</h5>
                        <p class="card-text">{{ $local->description }}</p>
                        <a href="/local/{{ $local->id }}" class="btn btn-primary">Información</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{$locals->links()}}
            </div>
        </div>
    </div>
    <!-- button create local -->
    @auth
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                    <a class="btn btn-primary" href="{{ Route('create') }}" target="_blank" rel="noopener noreferrer">subir
                        local</a>
            </div>
        </div>
    </div>
    @endauth
    


@endsection
