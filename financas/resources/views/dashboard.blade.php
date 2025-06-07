<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Resumo Financeiro -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-2">Total de Receitas</h3>
                        <p class="text-2xl font-bold text-green-600">R$ {{ number_format($totalReceitas, 2, ',', '.') }}</p>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-2">Total de Despesas</h3>
                        <p class="text-2xl font-bold text-red-600">R$ {{ number_format($totalDespesas, 2, ',', '.') }}</p>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-2">Saldo</h3>
                        <p class="text-2xl font-bold {{ $saldo >= 0 ? 'text-green-600' : 'text-red-600' }}">
                            R$ {{ number_format($saldo, 2, ',', '.') }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Gráficos -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Gráfico de Receitas por Categoria -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Receitas por Categoria</h3>
                        <div class="h-64" id="receitas-chart"></div>
                    </div>
                </div>
                
                <!-- Gráfico de Despesas por Categoria -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Despesas por Categoria</h3>
                        <div class="h-64" id="despesas-chart"></div>
                    </div>
                </div>
            </div>

            <!-- Últimas Transações -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Últimas Receitas -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-700">Últimas Receitas</h3>
                            <a href="{{ route('receitas.index') }}" class="text-blue-600 hover:text-blue-800">Ver todas</a>
                        </div>
                        
                        @if($ultimasReceitas->isEmpty())
                            <p class="text-gray-500">Nenhuma receita registrada.</p>
                        @else
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Descrição</th>
                                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Categoria</th>
                                            <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($ultimasReceitas as $receita)
                                            <tr>
                                                <td class="px-4 py-2 whitespace-nowrap">{{ $receita->descricao }}</td>
                                                <td class="px-4 py-2 whitespace-nowrap">{{ $receita->categoria }}</td>
                                                <td class="px-4 py-2 whitespace-nowrap text-right text-green-600 font-medium">
                                                    R$ {{ number_format($receita->valor, 2, ',', '.') }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
                
                <!-- Últimas Despesas -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-gray-700">Últimas Despesas</h3>
                            <a href="{{ route('despesas.index') }}" class="text-blue-600 hover:text-blue-800">Ver todas</a>
                        </div>
                        
                        @if($ultimasDespesas->isEmpty())
                            <p class="text-gray-500">Nenhuma despesa registrada.</p>
                        @else
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Descrição</th>
                                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Categoria</th>
                                            <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($ultimasDespesas as $despesa)
                                            <tr>
                                                <td class="px-4 py-2 whitespace-nowrap">{{ $despesa->descricao }}</td>
                                                <td class="px-4 py-2 whitespace-nowrap">{{ $despesa->categoria }}</td>
                                                <td class="px-4 py-2 whitespace-nowrap text-right text-red-600 font-medium">
                                                    R$ {{ number_format($despesa->valor, 2, ',', '.') }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ApexCharts JS -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Dados para o gráfico de receitas
            const receitasData = @json($receitasPorCategoria);
            const receitasLabels = receitasData.map(item => item.categoria);
            const receitasValues = receitasData.map(item => parseFloat(item.total));
            
            // Dados para o gráfico de despesas
            const despesasData = @json($despesasPorCategoria);
            const despesasLabels = despesasData.map(item => item.categoria);
            const despesasValues = despesasData.map(item => parseFloat(item.total));
            
            // Gráfico de Receitas
            if (receitasLabels.length > 0) {
                const receitasOptions = {
                    series: receitasValues,
                    chart: {
                        type: 'donut',
                        height: 250
                    },
                    labels: receitasLabels,
                    colors: ['#10B981', '#3B82F6', '#6366F1', '#8B5CF6', '#EC4899'],
                    legend: {
                        position: 'bottom'
                    }
                };
                
                const receitasChart = new ApexCharts(document.querySelector("#receitas-chart"), receitasOptions);
                receitasChart.render();
            } else {
                document.querySelector("#receitas-chart").innerHTML = '<p class="text-center text-gray-500">Sem dados para exibir</p>';
            }
            
            // Gráfico de Despesas
            if (despesasLabels.length > 0) {
                const despesasOptions = {
                    series: despesasValues,
                    chart: {
                        type: 'donut',
                        height: 250
                    },
                    labels: despesasLabels,
                    colors: ['#EF4444', '#F59E0B', '#F97316', '#D97706', '#DC2626'],
                    legend: {
                        position: 'bottom'
                    }
                };
                
                const despesasChart = new ApexCharts(document.querySelector("#despesas-chart"), despesasOptions);
                despesasChart.render();
            } else {
                document.querySelector("#despesas-chart").innerHTML = '<p class="text-center text-gray-500">Sem dados para exibir</p>';
            }
        });
    </script>
</x-app-layout>