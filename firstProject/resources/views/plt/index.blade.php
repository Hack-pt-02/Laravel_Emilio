@extends("layouts.layout")

@section("title", "index")

@section("titlePage")

<h1>prueba de titulo</h1>

@endsection

@section("content")

    <table class="table table-striped table-warning">
    @foreach ($locals as $local )
    <tr><td><a href="/local/{{$local[0]}}" class="text-dark"> {{ $local[1][1] }}</a></td></tr>
    @endforeach
    </table>

@endsection

