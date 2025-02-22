@extends('layout')

@section('conteudo')
<div class="container d-flex justify-content-center align-items-start mt-5">
    <div class="card w-50 p-4 shadow-lg">
        <h3 class="text-center mb-4">Cálculo de Potência</h3>
        <form method="post" action="listaex8">
            @csrf
            <div class="mb-3">
                <label for="base" class="form-label">Informe a Base:</label>
                <input type="number" id="base" name="base" class="form-control" required="" min="0">
            </div>

            <div class="mb-3">
                <label for="expoente" class="form-label">Informe o Expoente:</label>
                <input type="number" id="expoente" name="expoente" class="form-control" required="" min="0">
            </div>

            <button type="submit" class="btn btn-primary w-100">Calcular</button>
        </form>

        @isset($resultado)
        @isset($base)
        @isset($expoente)
        <div class="alert alert-info mt-4 text-center">
            O resultado de <strong>{{ $base }}</strong> elevado a <strong>{{ $expoente }}</strong> é <strong>{{ $resultado }}</strong>.
        </div>
        @endisset
        @endisset
        @endisset
    </div>
</div>
@endsection
