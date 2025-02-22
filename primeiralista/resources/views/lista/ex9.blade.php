@extends('layout')

@section('conteudo')
<div class="container d-flex justify-content-center align-items-start mt-5">
    <div class="card w-50 p-4 shadow-lg">
        <h3 class="text-center mb-4">Conversão de Medida</h3>
        <form method="post" action="listaex9">
            @csrf
            <div class="mb-3">
                <label for="metro" class="form-label">Informe um valor em metros:</label>
                <input type="number" id="metro" name="metro" class="form-control" required="" min="0">
            </div>

            <button type="submit" class="btn btn-primary w-100">Converter</button>
        </form>

        @isset($centimetro)
        @isset($metro)
        <div class="alert alert-info mt-4 text-center">
            <strong>{{ $metro }}</strong> metros em centímetros é igual a <strong>{{ $centimetro }}</strong> cm.
        </div>
        @endisset
        @endisset
    </div>
</div>
@endsection
