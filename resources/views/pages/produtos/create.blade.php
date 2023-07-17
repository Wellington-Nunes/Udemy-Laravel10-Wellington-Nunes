@extends('index')

@section('content')
    <form class="form" method="POST" action="{{ route('cadastrar.produto') }}">
        @csrf
        <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pt-3 pb-2">
            <h1 class="h2">Criar novo produto</h1>
        </div>

        <div class="mb-3">
            <label class="form-label">Nome:</label>
            <input type="text" value="{{old('nome')}}" class="form-control @error('nome') is-invalid @enderror" name="nome">
            @if ($errors->has('nome'))
                <div class="invalid-feedback"> {{ $errors->first('nome') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Valor:</label>
            <input value="{{old('valor')}}" id="mascara_valor" class="form-control @error('valor') is-invalid @enderror" name="valor">
            @if ($errors->has('valor'))
                <div class="invalid-feedback"> {{ $errors->first('valor') }}</div>
            @endif
        </div>

        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
@endsection
