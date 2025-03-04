@extends('layout')

@section('conteudo')
<form method="post" action="/ex4resp">
    @csrf
    <div class="mb-3">
        <label for="val1" class="form-label">Informe um valor:</label>
        <input type="number" id="val1" name="val1" class="form-control" required="">
    </div>


    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@if(isset($primos) && isset($valor))

        <h3>Números Primos até ({{$valor}}): </h3>
        <p>{{ implode(', ', $primos) }}</p>
@endif

@endsection