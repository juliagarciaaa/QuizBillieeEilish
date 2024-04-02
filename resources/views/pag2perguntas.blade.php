@extends('layout')
@section('content')

<div class-card = "border">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-center">
                <p class="texto">
                    <h4>
                        <strong> Pergunta 2: </strong> 
                    </h4>
                </p>
            </div>
        </div>
        <form action="((route('dadosPagina1')}}" method="POST"> 
            @csrf
            <div class="form-group py-4">
                <label for="pergunta"> <h3> <strong> Quando o album "When We All Fall Asleep, Where Do We Go?" foi lançado" </strong> </h3> </label>
            <div class="form-check py-4">
                <input class= "form-check-input"  type="radio" name=" pergunta" id="pergunta" value="A">
            <label class="form-check-label" for="pergunta">
                <h5> 29 de março de 2019 </h5>
            </label>
        </div>
        <div class="form-check py-4">
        <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="B">
            <label class="form-check-label" for="pergunta">
                <h5> 04 de abril de 2019 </h5>
            </label>
        </div>
        <div class="form-check py-4">
            <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="C"> 
            <label class="form-check-label" for="pergunta">
                <h5> 14 de julho de 2019 </h5>
            </label>
        </div>
        <div class="form-check py-4">
            <input class="form-check-input" type="radio" name=" pergunta" id="pergunta" value="D">
                <label class="form-check-label" for="pergunta">
                  <h5> 18 de setembro de 2019 </h5>
                </label>
         </div>
        </div>
    <button type="submit" class="btn btn-primary btn-em"> Proxima </button>
    <button onclick="window.location.href-'/';" type="button"
            class="btn btn-danger btn-am">Desistir</button>
        </form>
    </div>
</div>
@endsection