@extends('layout')

@section('conteudo')
<div class="container my-5">
    <h2 class="text-center mb-4">Conversão de Temperatura</h2>

    <!-- Formulário -->
    <form method="post" action="listaex2" class="shadow p-4 rounded bg-light">
        @csrf
        <div class="mb-3">
            <label for="temp1" class="form-label">Informe uma temperatura em Celsius:</label>
            <input type="number" id="temp1" name="temp1" class="form-control" required="" placeholder="Ex: 25" min="-100" max="1000">
        </div>

        <button type="submit" class="btn btn-primary w-100">Converter</button>
    </form>

    <!-- Exibição do Resultado -->
    @isset($faren)
        @isset($temp1)
            <div class="alert alert-success mt-4" role="alert">
                <h4 class="alert-heading">Resultado da Conversão:</h4>
                <p>{{ $temp1 }}ºC em Fahrenheit é <strong>{{$faren}}ºF</strong></p>
            </div>
        @endisset
    @endisset
</div>

@endsection
