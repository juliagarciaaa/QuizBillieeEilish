@extends('layout')
@section('content')

    <div class ="jumbotron">
        <p class ="h1 text-center py-4 "> Quiz Billie Eilish </p>
    </div>
    <div class ="container py-4">
        <div class ="row">
            <div class ="col-md-6">
                <p class ="h1 text-center"> Você está prestes a iniciar o quiz :) </p>
            </div>
            <div class =" col-md-6 ">
                <a class ="btn btn-primary" href ="{{route('inicio')}}"> Início </a>
            </div>
        </div>
    </div>
@endsection