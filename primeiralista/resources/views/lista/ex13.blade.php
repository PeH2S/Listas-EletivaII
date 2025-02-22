@extends('layout')

@section('conteudo')
<div class="container d-flex justify-content-center align-items-start mt-5">
    <div class="card w-50 p-4 shadow-lg">
        <h3 class="text-center mb-4">Cálculo de Juros Simples</h3>
        <form method="post" action="listaex13">
            @csrf
            <div class="mb-3">
                <label for="capital" class="form-label">Capital Inicial (R$):</label>
                <input type="number" name="capital" id="capital" class="form-control" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="taxa" class="form-label">Taxa de Juros (% ao período):</label>
                <input type="number" name="taxa" id="taxa" class="form-control" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="tempo" class="form-label">Período (em meses ou anos):</label>
                <input type="number" name="tempo" id="tempo" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Calcular</button>
        </form>

        @isset($form_juros)
        @isset($form_mont)
        <div class="alert alert-info mt-4 text-center">
            <h4>Resultado:</h4>
            <p><strong>Juros Simples:</strong> R$ <strong>{{ number_format($form_juros, 2, ',', '.') }}</strong></p>
            <p><strong>Montante Final:</strong> R$ <strong>{{ number_format($form_mont, 2, ',', '.') }}</strong></p>
        </div>
        @endisset
        @endisset
    </div>
</div>
@endsection
