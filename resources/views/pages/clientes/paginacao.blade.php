@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pb-2 pt-3">
        <h1 class="h2">Clientes</h1>
    </div>

    <div>
        <form action="{{ route('clientes.index') }}" method="get">
            <input type="text" name="pesquisar" placeholder="Digite o nome" />
            <button> Pesquisar </button>
            <a type="button" href="{{ route('cadastrar.cliente') }}" class="btn btn-success float-end"> Adicionar cliente </a>
        </form>
        <div class="table-responsive">
            @if ($findCliente->isEmpty())
                <h5>Não existe dados.</h3>
                @else
                    <table class="table-striped table-sm table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Endereço</th>
                                <th>Logradouro</th>
                                <th>CEP</th>
                                <th>Bairro</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($findCliente as $cliente)
                                <tr>
                                    <td>{{ $cliente->nome }}</td>
                                    <td>{{ $cliente->email }}</td>
                                    <td>{{ $cliente->endereco }}</td>
                                    <td>{{ $cliente->lougradouro }}</td>
                                    <td>{{ $cliente->cep }}</td>
                                    <td>{{ $cliente->bairro }}</td>
                                    <td>
                                        <a href="{{ route('atualizar.cliente', $cliente->id) }}" type="button"
                                            class="btn btn-light btn-sm">Editar</a>

                                        <meta name='csrf-token' content="{{ csrf_token() }}" />
                                        <a onClick="deleteRegistroPaginacao('{{ route('cliente.delete') }}', {{ $cliente->id }})"
                                            type="button" class="btn btn-danger btn-sm">Deletar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            @endif
        </div>
    @endsection
