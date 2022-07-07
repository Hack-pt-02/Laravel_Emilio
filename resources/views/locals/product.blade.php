@extends("locals.index")

@section("titleHead", "Local")

@section("title", "Productos")

@section("content")

<div class="container d-flex justify-content-center mt-3">
<div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$local[1]}}</h5>
            <p class="card-text">{{$local[2]}}</p>
        </div>
    </div>
</div>
<div class="container d-flex justify-content-center mt-3">
<a href="{{route ("index")}}"><button class="btn btn-primary"type="button">volver</button></a>
</div>
@endsection