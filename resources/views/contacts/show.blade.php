@extends('layouts.layout')

@section("titleHead", "Contact")

@section('title', "contacto")

@section("content")

<form method="post" action="{{ route ("contact")}}">
    @csrf
    <div class="mb-3 p-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="correo electrónico">
    </div>
    <div class="mb-3 p-3">
        <label for="exampleFormControlInput1" class="form-label">name</label>
        <input type="text" name="name" class="form-control" name="name" id="exampleFormControlInput1" placeholder="nombre">
    </div>
    <div class="mb-3 p-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="container text-center">
    <button class="btn btn-success" type="submit">enviar</button>
    </div>
</form>

<x-message-flash />

@endsection