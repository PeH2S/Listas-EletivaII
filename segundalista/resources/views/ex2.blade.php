@extends('layout')

@section('conteudo')


<form method="post" action="/ex2resp">
    @csrf
    <div class="mb-3">
        <label for="val1" class="form-label">Informe o primeiro valor:</label>
        <input type="number" id="val1" name="val1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="val2" class="form-label">Informe o segundo valor:</label>
        <input type="number" id="val2" name="val2" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($maior)
    @isset($menor)
        <ol>
            <li> {{$maior}} </li>
            <li> {{$menor}} </li>

        </ol>
    @endisset
@endisset
@isset($igual)
    <ol>
        <li>Números iguais: {{$igual}} </li>
    </ol>
@endisset

@endsection