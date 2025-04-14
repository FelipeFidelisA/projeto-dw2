@extends('layout')
@section('title', 'Receitas')

@section('content')
<div class="container">
    <h1 class="my-4">Lista de Receitas</h1>

    @foreach($receitas as $receita)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $receita->descricao }}</h5>
                <p class="card-text">
                    <strong>Categoria:</strong> {{ $receita->categoria }}<br>
                    <strong>Valor:</strong> R$ {{ number_format($receita->valor, 2, ',', '.') }}<br>
                    <strong>Data:</strong> {{ $receita->data_referencia}}
                </p>
                <a href="{{ route('receitas.show', $receita->id) }}" class="btn btn-primary">
                    Ver Detalhes
                </a>
            </div>
        </div>
    @endforeach
</div>
@endsection