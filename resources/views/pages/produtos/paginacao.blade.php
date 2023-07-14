@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pt-3 pb-2">
        <h1 class="h2">Produtos</h1>
    </div>

    <div>
        <form action="" method="get">
            <input type="text" name="pesquisar" placeholder="Digite o nome" />
            <button> Pesquisar </button>
            <a type="button" href=""  class="btn btn-success float-end"> Adicionar produto </a>
        </form >
    </div>
@endsection
