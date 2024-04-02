@extends('layout')
@section('content')

    <div class ="jumbotron">
        <p class =" h1 text-center py-4"> Quiz Billie Eilish </p>
        <img src ="{{asset('storage/imagens/Billie.jpg')}}" />
    </div>
    <div class ="container py-4">
        <div class ="row">
            <div class ="col-md-6">
                <p class ="h1 text-center"> Descubra o quanto você sabe sobre a artista! </p>
            </div>
            <div class ="col-md-6 botao">
            <a class ="btn btn-primary" href="{{route('pagina2')}}"> Próximo </a>
            </div>
        </div>
    </div>
@endsection