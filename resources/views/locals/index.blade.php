@extends("layouts.layout")

@section("titleHead", "inicio")

@section("title", "Todos nuestros locales")

@section("content")

    <table class="table table-striped mt-4">
        @foreach($locals as $local)
            <tr><td><a href="/local/{{$local[0]}}">{{$local[1]}}</a></td></tr>
        @endforeach
    </table>
@endsection

