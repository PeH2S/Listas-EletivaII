@extends('layout')

@section('conteudo')
<div class="container d-flex justify-content-center align-items-start mt-5">
    <div class="card w-50 p-4 shadow-lg">
        <h3 class="text-center mb-4">Cálculo da Área do Retângulo</h3>
        <form method="post" action="listaex4">
            @csrf
            <div class="mb-3">
                <label for="largura" class="form-label">Informe a Largura do Retângulo:</label>
                <input type="number" id="largura" name="largura" class="form-control" required="">
            </div>

            <div class="mb-3">
                <label for="altura" class="form-label">Informe a Altura do Retângulo:</label>
                <input type="number" id="altura" name="altura" class="form-control" required="">
            </div>

            <button type="submit" class="btn btn-primary w-100">Enviar</button>
        </form>

        @isset($area)
        <div class="alert alert-info mt-4 text-center">
            A área do Retângulo é <strong>{{ $area }}</strong>
        </div>
        @endisset
    </div>
</div>
@endsection
