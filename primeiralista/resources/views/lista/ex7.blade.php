@extends('layout')

@section('conteudo')
<div class="container d-flex justify-content-center align-items-start mt-5">
    <div class="card w-50 p-4 shadow-lg">
        <h3 class="text-center mb-4">Cálculo do Perímetro do Círculo</h3>
        <form method="post" action="listaex7">
            @csrf
            <div class="mb-3">
                <label for="raio" class="form-label">Informe o Raio do Círculo:</label>
                <input type="number" id="raio" name="raio" class="form-control" required="" min="0">
            </div>

            <button type="submit" class="btn btn-primary w-100">Calcular</button>
        </form>

        @isset($perimetro)
        <div class="alert alert-info mt-4 text-center">
            O perímetro do círculo é <strong>{{ $perimetro }}</strong> unidades.
        </div>
        @endisset
    </div>
</div>
@endsection
