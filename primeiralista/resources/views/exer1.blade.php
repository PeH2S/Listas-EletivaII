@extends('layout')

@section('conteudo')
<div class="container d-flex justify-content-center align-items-start mt-5">
    <div class="card w-50 p-4 shadow-lg">
        <h3 class="text-center mb-4">Cálculo da Soma</h3>
        <form method="post" action="/exer1resp">
            @csrf
            <div class="mb-3">
                <label for="valor1" class="form-label">Informe o valor 1:</label>
                <input type="number" id="valor1" name="valor1" class="form-control" required step="0.01">
            </div>

            <div class="mb-3">
                <label for="valor2" class="form-label">Informe o valor 2:</label>
                <input type="number" id="valor2" name="valor2" class="form-control" required step="0.01">
            </div>

            <button type="submit" class="btn btn-primary w-100">Enviar</button>
        </form>

        @isset($soma)
        <div class="alert alert-info mt-4 text-center">
            O valor da soma é <strong>{{ $soma }}</strong>
        </div>
        @endisset
    </div>
</div>
@endsection
