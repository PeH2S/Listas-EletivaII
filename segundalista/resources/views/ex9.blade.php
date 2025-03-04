@extends('layout')

@section('conteudo')
<form method="post" action="/ex9resp">
    @csrf
    <div class="mb-3">
        <label for="val1" class="form-label">Informe um valor:</label>
        <input type="number" id="val1" name="val1" class="form-control" required="">
    </div>


    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@if(isset($fatorial))
        <h3>Fatorial de {{ $valor }}:</h3>
        <p>{{ $valor }}! = {{ $fatorial }}</p>
@endif

@endsection