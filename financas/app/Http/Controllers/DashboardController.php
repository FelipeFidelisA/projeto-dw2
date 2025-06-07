<?php

namespace App\Http\Controllers;

use App\Models\Receita;
use App\Models\Despesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        
        // Totais
        $totalReceitas = Receita::where('user_id', $user_id)->sum('valor');
        $totalDespesas = Despesa::where('user_id', $user_id)->sum('valor');
        $saldo = $totalReceitas - $totalDespesas;
        
        // Receitas por categoria
        $receitasPorCategoria = Receita::where('user_id', $user_id)
            ->select('categoria', DB::raw('SUM(valor) as total'))
            ->groupBy('categoria')
            ->orderBy('total', 'desc')
            ->get();
            
        // Despesas por categoria
        $despesasPorCategoria = Despesa::where('user_id', $user_id)
            ->select('categoria', DB::raw('SUM(valor) as total'))
            ->groupBy('categoria')
            ->orderBy('total', 'desc')
            ->get();
            
        // Últimas transações
        $ultimasReceitas = Receita::where('user_id', $user_id)
            ->latest()
            ->take(5)
            ->get();
            
        $ultimasDespesas = Despesa::where('user_id', $user_id)
            ->latest()
            ->take(5)
            ->get();
            
        return view('dashboard', compact(
            'totalReceitas', 
            'totalDespesas', 
            'saldo', 
            'receitasPorCategoria', 
            'despesasPorCategoria',
            'ultimasReceitas',
            'ultimasDespesas'
        ));
    }
}