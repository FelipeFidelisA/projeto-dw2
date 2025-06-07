<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800">
                Alvora | Receitas
            </h2>
            <a href="{{ route('receitas.create') }}" class="inline-block px-4 py-2 bg-blue-600 text-white font-bold rounded-md hover:bg-blue-700" style="background-color: #2563eb !important; color: white !important; font-weight: bold !important; padding: 10px 16px !important; border-radius: 6px !important;">
                + Nova receita
            </a>
        </div>
    </x-slot>

    <div class="container mx-auto p-4">
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        @foreach($receitas as $receita)
            <div class="card mb-3 bg-body-tertiary">
                <div class="card-body">
                    <h5 class="card-title">{{ $receita->descricao }}</h5>
                    <div class="flex justify-between items-center">
                        <p class="card-text">
                            <strong>Categoria:</strong> {{ $receita->categoria }}<br>
                            <strong>Valor:</strong> R$ {{ number_format($receita->valor, 2, ',', '.') }}<br>
                            <strong>Data:</strong> {{ date('d/m/Y', strtotime($receita->data_referencia)) }}
                        </p>
                        <div class="flex space-x-2">
                            <a href="{{ route('receitas.edit', $receita) }}" class="btn btn-primary">
                                Editar
                            </a>
                            <form action="{{ route('receitas.destroy', $receita) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta receita?')">
                                    Excluir
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>