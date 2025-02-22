@extends('layout')

@section('conteudo')
<div class="container d-flex justify-content-center align-items-start mt-5">
    <div class="card w-50 p-4 shadow-lg">
        <h3 class="text-center mb-4">Cálculo do IMC</h3>
        <form method="post" action="listaex11">
            @csrf
            <div class="mb-3">
                <label for="kg" class="form-label">Informe seu peso (Kg):</label>
                <input type="number" id="kg" name="kg" class="form-control" required="" step="0.1" min="0">
            </div>

            <div class="mb-3">
                <label for="altura" class="form-label">Informe sua altura (metros):</label>
                <input type="number" id="altura" name="altura" class="form-control" required="" step="0.01" min="0">
            </div>

            <button type="submit" class="btn btn-primary w-100">Calcular IMC</button>
        </form>

        @isset($imc)
        @isset($kg)
        @isset($alt)
        <div class="alert alert-info mt-4 text-center">
            O IMC de <strong>{{ $kg }}</strong> Kg e <strong>{{ $alt }}</strong> metros é igual a um IMC de <strong>{{ number_format($imc, 2) }}</strong>.
        </div>
        @endisset
        @endisset
        @endisset
    </div>
</div>
@endsection
