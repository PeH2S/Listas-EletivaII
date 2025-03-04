@extends('layout')


@section('conteudo')


<form method="post" action="/ex1resp">
    @csrf
    <div class="mb-3">
        <label for="num1" class="form-label">Informe o primeiro valor:</label>
        <input type="number" id="num1" name="num1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="num2" class="form-label">Informe o segundo valor:</label>
        <input type="number" id="num2" name="num2" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($resultado)
    <p>O resultado da soma é {{$resultado}}</p>
@endisset
@endsection