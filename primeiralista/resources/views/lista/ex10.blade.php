@extends('layout')

@section('conteudo')
<div class="container d-flex justify-content-center align-items-start mt-5">
    <div class="card w-50 p-4 shadow-lg">
        <h3 class="text-center mb-4">Conversão de Distância</h3>
        <form method="post" action="listaex10">
            @csrf
            <div class="mb-3">
                <label for="km" class="form-label">Informe um valor em quilometros:</label>
                <input type="number" id="km" name="km" class="form-control" required="" min="0">
            </div>

            <button type="submit" class="btn btn-primary w-100">Converter</button>
        </form>

        @isset($milha)
        @isset($km)
        <div class="alert alert-info mt-4 text-center">
            <strong>{{ $km }}</strong> quilometros em milhas é igual a <strong>{{ $milha }}</strong> milhas.
        </div>
        @endisset
        @endisset
    </div>
</div>
@endsection
