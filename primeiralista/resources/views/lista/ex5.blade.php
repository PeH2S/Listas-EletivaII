@extends('layout')

@section('conteudo')
<div class="container d-flex justify-content-center align-items-start mt-5">
    <div class="card w-50 p-4 shadow-lg">
        <h3 class="text-center mb-4">Cálculo da Área do Círculo</h3>
        <form method="post" action="listaex5">
            @csrf
            <div class="mb-3">
                <label for="raio" class="form-label">Informe o raio do círculo:</label>
                <input type="number" id="raio" name="raio" class="form-control" required="">
            </div>

            <button type="submit" class="btn btn-primary w-100">Enviar</button>
        </form>

        @isset($area)
        <div class="alert alert-info mt-4 text-center">
            A área do círculo é <strong>{{ $area }}</strong> unidades quadradas.
        </div>
        @endisset
    </div>
</div>
@endsection
