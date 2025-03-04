@extends('layout')

@section('conteudo')

<form method="post" action="/ex10resp">
    @csrf
    <div class="mb-3">
        <label for="val1" class="form-label">Informe um valor:</label>
        <input type="number" id="val1" name="val1" class="form-control" required="">
    </div>


    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@if(isset($tabuada))
        <h3>Tabuada do {{ $valor }}:</h3>
        <ul>
            @foreach($tabuada as $linha)
                <li>{{ $linha }}</li>
            @endforeach
        </ul>
@endif
@endsection