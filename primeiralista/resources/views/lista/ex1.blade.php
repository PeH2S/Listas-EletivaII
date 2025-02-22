@extends('layout')

@section('conteudo')
<div class="container d-flex justify-content-center align-items-center ">
    <div class="card w-50 p-4 shadow-lg">
        <h3 class="text-center mb-4">Cálculo da Média</h3>
        <form method="post" action="listaex1">
            @csrf
            <div class="mb-3">
                <label for="nota1" class="form-label">Digite a primeira nota:</label>
                <input type="number" id="nota1" name="nota1" class="form-control" required step="0.01" min="0" max="10">
            </div>

            <div class="mb-3">
                <label for="nota2" class="form-label">Digite a segunda nota:</label>
                <input type="number" id="nota2" name="nota2" class="form-control" required step="0.01" min="0" max="10">
            </div>

            <div class="mb-3">
                <label for="nota3" class="form-label">Digite a terceira nota:</label>
                <input type="number" id="nota3" name="nota3" class="form-control" required step="0.01" min="0" max="10">
            </div>

            <button type="submit" class="btn btn-primary w-100">Enviar</button>
        </form>

        @isset($media)
        <div class="alert alert-info mt-4 text-center">
            A média é <strong>{{ number_format($media, 2) }}</strong>
        </div>
        @endisset
    </div>
</div>
@endsection
