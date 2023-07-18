@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pb-2 pt-3">
        <h1 class="h2">Usuarios</h1>
    </div>
    <div>
        <form action="{{ route('usuario.index') }}" method="get">
            <input type="text" name="pesquisar" placeholder="Digite o nome" />
            <button> Pesquisar </button>
            <a type="button" href="{{ route('cadastrar.usuario') }}" class="btn btn-success float-end">
                Incluir Usuario
            </a>
        </form>
        <div class="table-responsive mt-4">
            @if ($findUsuario->isEmpty())
                <p> Não existe dados </p>
            @else
                <table class="table-striped table-sm table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($findUsuario as $usuario)
                            <tr>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>

                                <td>
                                    <a href="{{ route('atualizar.usuario', $usuario->id) }}" class="btn btn-light btn-sm">
                                        Editar
                                    </a>

                                    <meta name='csrf-token' content=" {{ csrf_token() }}" />
                                    <a onclick="deleteRegistroPaginacao( '{{ route('usuario.delete') }} ', {{ $usuario->id }}  )"
                                        class="btn btn-danger btn-sm">
                                        Excluir
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

    </div>
@endsection
