@extends('index')

@section('content')
    <form class="form" method="POST" action="{{ route('atualizar.tag', $findTag->id) }}">
        @csrf
        @method('PUT')
        <div class="d-flex justify-content-between flex-md-nowrap align-items-center border-bottom mb-3 flex-wrap pb-2 pt-3">
            <h1 class="h2">Editar informações da tag</h1>
        </div>

        <div class="mb-3">
            <label class="form-label">Nome:</label>
            <input type="text" value=" {{ isset($findTag->nome) ? $findTag->nome : old('nome') }}"
                class="form-control @error('nome') is-invalid @enderror" name="nome">
            @if ($errors->has('nome'))
                <div class="invalid-feedback"> {{ $errors->first('nome') }}</div>
            @endif
        </div>
        
        <button type="submit" class="btn btn-success">Atualizar</button>
    </form>
@endsection