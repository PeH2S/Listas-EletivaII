@extends('layout')

@section('conteudo')

<form method="post" action="/ex6resp">
    @csrf
    <div class="mb-3">
        <label for="val1" class="form-label">Informe um valor:</label>
        <input type="number" id="val1" name="val1" class="form-control" required="">
    </div>


    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@if(isset($numeros))
    <h3>Números de 1 até {{ count($numeros) }}:</h3>
    <ul>
        @foreach($numeros as $num)
            <li>{{ $num }}</li>
        @endforeach
    </ul>
@endif

@endsection