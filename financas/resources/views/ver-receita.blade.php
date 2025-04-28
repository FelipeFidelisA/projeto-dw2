<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Alvora | Detalhes da Receita
            </h2>
            <div class="space-x-2">
                <a href="{{ route('receitas.edit', $receita->id) }}" class="btn btn-warning">
                    <i class="fas fa-edit"></i> Editar
                </a>
                <form action="{{ route('receitas.destroy', $receita->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta receita?')">
                        <i class="fas fa-trash"></i> Excluir
                    </button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Card de Detalhes da Receita -->
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            <h3 class="card-title mb-0">
                                <i class="fas fa-receipt mr-2"></i> {{ $receita->descricao }}
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text">
                                        <strong><i class="fas fa-tag mr-2"></i>Categoria:</strong> 
                                        <span class="badge bg-info text-dark">{{ $receita->categoria }}</span>
                                    </p>
                                    <p class="card-text">
                                        <strong><i class="fas fa-money-bill-wave mr-2"></i>Valor:</strong> 
                                        <span class="text-success font-weight-bold">
                                            R$ {{ number_format($receita->valor, 2, ',', '.') }}
                                        </span>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="card-text">
                                        <strong><i class="far fa-calendar-alt mr-2"></i>Data:</strong> 
                                        {{ \Carbon\Carbon::parse($receita->data_referencia)->format('d/m/Y') }}
                                    </p>
                                    <p class="card-text">
                                        <strong><i class="far fa-clock mr-2"></i>Criado em:</strong> 
                                        {{ $receita->created_at->format('d/m/Y H:i') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <a href="{{ route('receitas.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left mr-2"></i> Voltar para a lista
                            </a>
                        </div>
                    </div>

                    <!-- Observações (se houver) -->
                    @if($receita->observacoes)
                    <div class="card mt-4">
                        <div class="card-header bg-light">
                            <h4 class="mb-0"><i class="fas fa-sticky-note mr-2"></i>Observações</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $receita->observacoes }}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>