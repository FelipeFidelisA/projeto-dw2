<x-app-layout>
    <div class="container mx-auto p-4 sm:p-6 lg:p-8">
        <div class="max-w-xl mx-auto bg-white rounded-lg shadow-xl overflow-hidden">
            <div class="p-6 sm:p-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Editar Receita</h2>

                <form action="{{ route('receitas.update', $receita) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-5">
                        <label for="descricao" class="block text-sm font-medium text-gray-700 mb-2">Descrição da Receita</label>
                        <input type="text" id="descricao" name="descricao" class="form-input w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('descricao') border-red-500 @enderror" value="{{ old('descricao', $receita->descricao) }}" placeholder="Ex: Salário, Venda de produtos, Freelance..." required>
                        @error('descricao')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="categoria" class="block text-sm font-medium text-gray-700 mb-2">Categoria</label>
                        <select id="categoria" name="categoria" class="form-select w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('categoria') border-red-500 @enderror" required>
                            <option value="">Selecione uma categoria</option>
                            <option value="Salário" {{ old('categoria', $receita->categoria) == 'Salário' ? 'selected' : '' }}>Salário</option>
                            <option value="Freelance" {{ old('categoria', $receita->categoria) == 'Freelance' ? 'selected' : '' }}>Freelance</option>
                            <option value="Vendas" {{ old('categoria', $receita->categoria) == 'Vendas' ? 'selected' : '' }}>Vendas</option>
                            <option value="Investimentos" {{ old('categoria', $receita->categoria) == 'Investimentos' ? 'selected' : '' }}>Investimentos</option>
                            <option value="Outros" {{ old('categoria', $receita->categoria) == 'Outros' ? 'selected' : '' }}>Outros</option>
                        </select>
                        @error('categoria')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="valor" class="block text-sm font-medium text-gray-700 mb-2">Valor (R$)</label>
                        <input type="number" step="0.01" id="valor" name="valor" class="form-input w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('valor') border-red-500 @enderror" value="{{ old('valor', $receita->valor) }}" placeholder="0.00" required>
                        @error('valor')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="data_referencia" class="block text-sm font-medium text-gray-700 mb-2">Data de Referência</label>
                        <input type="date" id="data_referencia" name="data_referencia" class="form-input w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 @error('data_referencia') border-red-500 @enderror" value="{{ old('data_referencia', $receita->data_referencia->format('Y-m-d')) }}" required>
                        @error('data_referencia')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-between">
                        <a href="{{ route('receitas.index') }}" class="px-6 py-3 bg-gray-500 text-white font-semibold rounded-md shadow-lg hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition duration-150 ease-in-out">
                            Cancelar
                        </a>
                        <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-md shadow-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out" style="background-color: #3b82f6;">
                            Atualizar Receita
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>