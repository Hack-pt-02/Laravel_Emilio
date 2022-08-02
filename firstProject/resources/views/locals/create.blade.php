@extends('layouts.layout')

@section('titlePage', 'Sugerencia de locales')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" enctype="multipart/form-data" class="mb-3">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre de Local</label>
                        <input type="text" class="form-control" name="name" id="exampleFormControlInput1"
                            placeholder="nombre del local">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" id="desciption" name="description" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Imagen</label>
                        <input type="file" class="form-control" id="img" name="img"></input>
                    </div>
                    <div>
                        <button type="submit">Enviar</button>
                    </div>
            </div>
        </div>

    @endsection
