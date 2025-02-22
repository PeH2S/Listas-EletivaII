@extends('layout')

@section('conteudo')
<div class="container d-flex justify-content-center align-items-start mt-5">
    <div class="card w-50 p-4 shadow-lg">
        <h3 class="text-center mb-4">Conversão de Dias</h3>
        <form method="post" action="listaex15">
            @csrf
            <div class="mb-3">
                <label for="dias" class="form-label">Insira a quantidade de dias:</label>
                <input type="number" name="dias" id="dias" class="form-control" step="1" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Converter</button>
        </form>

        @isset($dias)
        <div class="alert alert-info mt-4 text-center">
            <h4>Resultado:</h4>
            <p><strong>{{ $dias }}</strong> dias equivalem a:</p>
            <p><strong>{{ $horas }}</strong> horas</p>
            <p><strong>{{ $minutos }}</strong> minutos</p>
            <p><strong>{{ $segundos }}</strong> segundos</p>
        </div>
        @endisset
    </div>
</div>
@endsection
