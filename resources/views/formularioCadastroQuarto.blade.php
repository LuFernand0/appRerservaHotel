@extends('layout')
@section('content')
<section class="container mt-5">
    <form class="row g-3" method="Post" action="{{route('envia-banco-quarto')}}">
        @csrf
        <div class="col-md-12">
            <label for="inputNum" class="form-label">Numero:</label>
            <input type="text" class="form-control" id="inputNum" name="Numero">
        </div>

        <!-- <div class="col-md-12">
            <span>Tipo: </span>
            <select class="form-select" aria-label="Default select example">
                <option selected disabled>...</option>
                <option value="Classe A+">Classe A+</option>
                <option value="Comercial">Comercial</option>
                <option value="Suite">Suite</option>
            </select>
        </div> -->
        <div class="col-3">
            <label for="inputTipo" class="form-label">tipo:</label>
            <input type="text" class="form-control" id="inputTipo" name="tipo">
        </div>

        <div class="col-3">
            <label for="inputValor" class="form-label">Valor:</label>
            <input type="text" class="form-control" id="inputValor" name="valor">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</section>

@endsection