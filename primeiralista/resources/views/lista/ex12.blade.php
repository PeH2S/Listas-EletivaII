@extends('layout')

@section('conteudo')
<div class="container d-flex justify-content-center align-items-start mt-5">
    <div class="card w-50 p-4 shadow-lg">
        <h3 class="text-center mb-4">Cálculo de Desconto</h3>
        <form method="post" action="listaex12">
            @csrf
            <div class="mb-3">
                <label for="preco" class="form-label">Informe o Preço:</label>
                <input type="number" id="preco" name="preco" class="form-control" required="" step="0.01" min="0">
            </div>

            <div class="mb-3">
                <label for="desconto" class="form-label">Informe o Percentual de Desconto:</label>
                <input type="number" id="desconto" name="desconto" class="form-control" required="" step="0.01" min="0" max="100">
            </div>

            <button type="submit" class="btn btn-primary w-100">Calcular Desconto</button>
        </form>

        @isset($preco)
        @isset($desconto)
        @isset($preco_final)
        @isset($percent)
        <div class="alert alert-info mt-4 text-center">
            O preço de R$ <strong>{{ number_format($preco, 2, ',', '.') }}</strong> com um desconto de <strong>{{ $percent }}%</strong> é igual a R$ <strong>{{ number_format($preco_final, 2, ',', '.') }}</strong>.
        </div>
        <div class="alert alert-info text-center">
            Valor do Desconto: R$ <strong>{{ number_format($desconto, 2, ',', '.') }}</strong>
        </div>
        @endisset
        @endisset
        @endisset
        @endisset
    </div>
</div>
@endsection
