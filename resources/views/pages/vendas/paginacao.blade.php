@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pb-2 pt-3">
        <h1 class="h2">Vendas</h1>
    </div>

    <div>
        <form action="{{ route('vendas.index') }}" method="get">
            <input type="text" name="pesquisar" placeholder="Digite o nome" />
            <button> Pesquisar </button>
            <a type="button" href="{{ route('cadastrar.venda') }}" class="btn btn-success float-end"> Adicionar venda </a>
        </form>
        <div class="table-responsive">
            @if ($findVenda->isEmpty())
                <h5>Não existe dados.</h3>
                @else
                    <table class="table-striped table-sm table">
                        <thead>
                            <tr>
                                <th>Numeração</th>
                                <th>Produto</th>
                                <th>Cliente</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($findVenda as $venda)
                                <tr>
                                    <td>{{ $venda->numero_da_venda }}</td>
                                    <td>{{ $venda->produto->nome }}</td>
                                    <td>{{ $venda->cliente->nome }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            @endif
        </div>
    @endsection
