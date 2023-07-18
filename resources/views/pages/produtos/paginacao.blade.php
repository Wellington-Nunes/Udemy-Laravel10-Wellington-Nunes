@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pb-2 pt-3">
        <h1 class="h2">Produtos</h1>
    </div>

    <div>
        <form action="{{ route('produtos.index') }}" method="get">
            <input type="text" name="pesquisar" placeholder="Digite o nome" />
            <button> Pesquisar </button>
            <a type="button" href="{{ route('cadastrar.produto') }}" class="btn btn-success float-end"> Adicionar produto </a>
        </form>
        <div class="table-responsive">
            @if ($findProdutos->isEmpty())
                <h5>Não existe dados.</h3>
                @else
                    <table class="table-striped table-sm table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Valor</th>
                                {{-- <th>Tags</th> --}}
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($findProdutos as $produto)
                                <tr>
                                    <td>{{ $produto->nome }}</td>
                                    <td>{{ 'R$' . ' ' . number_format($produto->valor, 2, ',', '.') }}</td>
                                    {{-- <td>{{ $produto->tag }}</td> --}}
                                    <td>
                                        <a href="{{ route('atualizar.produto', $produto->id) }}" type="button"
                                            class="btn btn-secondary btn-sm">Editar</a>

                                        <meta name='csrf-token' content="{{ csrf_token() }}" />
                                        <a onClick="deleteRegistroPaginacao('{{ route('produtos.delete') }}', {{ $produto->id }})"type="button"
                                            class="btn btn-danger btn-sm">Deletar</a>

                                        <a href="#" type="button" class="btn btn-primary btn-sm">Nova Tag</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            @endif
        </div>
    @endsection
