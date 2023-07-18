@extends('index')

@section('content')
    <form class="form" method="POST" action="{{ route('cadastrar.venda') }}">
        @csrf
        <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pb-2 pt-3">
            <h1 class="h2">Criar nova venda</h1>
        </div>

        <div class="mb-3">
            <label class="form-label">Numeração:</label>
            <input type="text" disabled value="{{ $findNumeracao }}" name="numero_da_venda"
                class="form-control @error('nome') is-invalid @enderror">
        </div>

        <div class="mb-3">
            <label class="form-label">Pruduto:</label>
            <select class="form-select" name="produto_id">
                <option selected>Selecione aqui</option>
                @foreach ($findProduto as $produto)
                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Cliente:</label>
            <select class="form-select" name="cliente_id">
                <option selected>Selecione aqui</option>
                @foreach ($findCliente as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
@endsection
