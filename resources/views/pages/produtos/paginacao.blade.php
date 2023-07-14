@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pt-3 pb-2">
        <h1 class="h2">Produtos</h1>
    </div>

    <div>
        <form action="" method="get">
            <input type="text" name="pesquisar" placeholder="Digite o nome" />
            <button> Pesquisar </button>
            <a type="button" href="" class="btn btn-success float-end"> Adicionar produto </a>
        </form>


        <div class="table-responsive">
            <table class="table-striped table-sm table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($findProdutos as $produto)
                        <tr>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ 'R$' . ' ' . number_format($produto->valor, 2, ',', '.') }}</td>
                            <td>
                            <a href="" type="button" class="btn btn-light btn-sm">Editar</a>
                            <a href="" type="button" class="btn btn-danger btn-sm">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    @endsection
