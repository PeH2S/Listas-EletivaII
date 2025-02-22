@extends('layout')

@section('conteudo')
<div class="container d-flex justify-content-center align-items-start mt-5">
    <div class="card w-50 p-4 shadow-lg">
        <h3 class="text-center mb-4">Conversão de Temperatura</h3>
        <form method="post" action="listaex3">
            @csrf
            <div class="mb-3">
                <label for="temp1" class="form-label">Informe uma temperatura em Fahrenheit:</label>
                <input type="number" id="temp1" name="cel" class="form-control" required="">
            </div>

            <button type="submit" class="btn btn-primary w-100">Enviar</button>
        </form>

        @isset($celsius)
        @isset($cel)
        <div class="alert alert-info mt-4 text-center">
            {{ $cel }}ºF em Celsius é <strong>{{ $celsius }}</strong>ºC
        </div>
        @endisset
        @endisset
    </div>
</div>
@endsection
