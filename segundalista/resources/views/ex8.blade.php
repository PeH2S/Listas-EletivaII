@extends('layout')

@section('conteudo')

<form method="post" action="/ex8resp">
    @csrf
    <div class="mb-3">
        <label for="val1" class="form-label">Informe um valor:</label>
        <input type="number" id="val1" name="val1" class="form-control" required="">
    </div>


    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@if(isset($contagem))
        <h3>Contagem Regressiva:</h3>
        <ul>
            @foreach($contagem as $num)
                <li>{{ $num }}</li>
            @endforeach
        </ul>
@endif

@endsection