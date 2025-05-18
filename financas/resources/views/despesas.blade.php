<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Alvora | Despesas
        </h2>
    </x-slot>

    @foreach($despesas as $despesa)
        <div class="card mb-3 bg-body-tertiary">
            <div class="card-body">
                <h5 class="card-title">{{ $despesa->descricao }}</h5>
                <p class="card-text">
                    <strong>Categoria:</strong> {{ $despesa->categoria }}<br>
                    <strong>Valor:</strong> R$ {{ number_format($despesa->valor, 2, ',', '.') }}<br>
                    <strong>Data:</strong> {{ $despesa->data_referencia}}
                </p>
                <a href="{{ route('despesas.show', $despesa) }}" class="btn btn-primary">
                    Ver Detalhes
                </a>
            </div>
        </div>
    @endforeach
</div>
</x-app-layout>