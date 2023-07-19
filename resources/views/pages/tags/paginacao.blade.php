@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pb-2 pt-3">
        <h1 class="h2">Tags</h1>
    </div>

    <div>
        <form action="{{ route('tags.index') }}" method="get">
            <input type="text" name="pesquisar" placeholder="Digite o nome" />
            <button> Pesquisar </button>
            <a type="button" href="{{ route('cadastrar.tag') }}" class="btn btn-success float-end"> Adicionar tag </a>
        </form>
        <div class="table-responsive">
            @if ($findTag->isEmpty())
                <h5>Não existe dados.</h3>
                @else
                    <table class="table-striped table-sm table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($findTag as $tag)
                                <tr>
                                    <td>{{ $tag->nome }}</td>
                                    <td>
                                        <a href="{{ route('atualizar.tag', $tag->id) }}" type="button"
                                            class="btn btn-secondary btn-sm">Editar</a>

                                        <meta name='csrf-token' content="{{ csrf_token() }}" />
                                        <a onClick="deleteRegistroPaginacao('{{ route('tag.delete') }}', {{ $tag->id }})"
                                            type="button" class="btn btn-danger btn-sm">Deletar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            @endif
        </div>
    </div>
@endsection
