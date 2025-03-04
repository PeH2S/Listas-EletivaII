@extends('layout')

@section('conteudo')
<form method="post" action="/ex5resp">
    @csrf
    <div class="mb-3">
        <label for="val1" class="form-label">Informe um valor de (1 a 12):</label>
        <input type="number" id="val1" name="val1" class="form-control" required="">
    </div>


    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@if(isset($mesAno))
    <p> {{$mesAno}} </p>
@endif
@endsection