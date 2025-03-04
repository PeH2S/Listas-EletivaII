@extends('layout')

@section('conteudo')


<form method="post" action="/ex3resp">
    @csrf
    <div class="mb-3">
        <label for="prod1" class="form-label">Informe o valor do produto:</label>
        <input type="number" id="prod1" name="prod1" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($desconto)
    <p>O valor final do produto aplicado 15% de desconto é de R${{number_format($desconto, 2, ',', '.')}} </p>
@endisset
@isset($produto)
    <p>O valor do produto é de R${{number_format($produto, 2, ',', '.')}} </p>
@endisset
@endsection