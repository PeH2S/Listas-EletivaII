@extends('layout')

@section('conteudo')

<form method="post" action="/ex7resp">
    @csrf
    <div class="mb-3">
        <label for="val1" class="form-label">Informe um valor:</label>
        <input type="number" id="val1" name="val1" class="form-control" required="">
    </div>


    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($somar)
    @isset($valor)
        <p>A soma dos valor de 1 até {{$valor}} é de: {{$somar}} </p>
    @endisset
@endisset

@endsection