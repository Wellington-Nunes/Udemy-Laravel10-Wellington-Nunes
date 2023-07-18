@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pb-2 pt-3">
        <h1 class="h2">Dashboard</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 mb-sm-0 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Produtos Cadastrados</h5>
                    <p class="card-text">Total de produtos cadastrado no sistema</p>
                    <a href="{{ route('produtos.index') }}" class="btn btn-primary"> {{ $totalDeProdutoCadastrado }}</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cliente Cadastrados</h5>
                    <p class="card-text">Total de clientes cadastrados no sistema</p>
                    <a href="{{ route('clientes.index') }}" class="btn btn-primary"> {{ $totalDeClienteCadastrado }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-sm-6 mb-sm-0 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Vendas Cadastradas</h5>
                    <p class="card-text">Total de vendas cadastradas</p>
                    <a href="{{ route('vendas.index') }}" class="btn btn-primary"> {{ $totalDeVendaCadastrado }}</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Usuários Cadastrados</h5>
                    <p class="card-text">Total de Usuario cadastradas</p>
                    <a href="{{ route('usuario.index') }}" class="btn btn-primary"> {{ $totalDeUsuarioCadastrado }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
