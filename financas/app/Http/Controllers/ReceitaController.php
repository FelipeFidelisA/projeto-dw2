<?php

namespace App\Http\Controllers;

use App\Models\Receita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReceitaController extends Controller
{
    public function index()
    {
        $receitas = Receita::where('user_id', Auth::id())->orderBy('data_referencia', 'desc')->get();
        return view('receitas.index', compact('receitas'));
    }
    
    public function create()
    {
        return view('receitas.create');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'descricao' => 'required|string|max:255',
            'categoria' => 'required|string|max:100',
            'valor' => 'required|numeric|min:0',
            'data_referencia' => 'required|date',
        ]);
        
        $receita = new Receita();
        $receita->descricao = $validated['descricao'];
        $receita->categoria = $validated['categoria'];
        $receita->valor = $validated['valor'];
        $receita->data_referencia = $validated['data_referencia'];
        $receita->user_id = Auth::id();
        $receita->save();
        
        return redirect()->route('dashboard')->with('success', 'Receita registrada com sucesso!');
    }
    
    public function edit(Receita $receita)
    {
        // Verificar se a receita pertence ao usuário atual
        if ($receita->user_id !== Auth::id()) {
            abort(403);
        }
        
        return view('receitas.edit', compact('receita'));
    }
    
    public function update(Request $request, Receita $receita)
    {
        // Verificar se a receita pertence ao usuário atual
        if ($receita->user_id !== Auth::id()) {
            abort(403);
        }
        
        $validated = $request->validate([
            'descricao' => 'required|string|max:255',
            'categoria' => 'required|string|max:100',
            'valor' => 'required|numeric|min:0',
            'data_referencia' => 'required|date',
        ]);
        
        $receita->descricao = $validated['descricao'];
        $receita->categoria = $validated['categoria'];
        $receita->valor = $validated['valor'];
        $receita->data_referencia = $validated['data_referencia'];
        $receita->save();
        
        return redirect()->route('receitas.index')->with('success', 'Receita atualizada com sucesso!');
    }
    
    public function destroy(Receita $receita)
    {
        // Verificar se a receita pertence ao usuário atual
        if ($receita->user_id !== Auth::id()) {
            abort(403);
        }
        
        $receita->delete();
        
        return redirect()->route('receitas.index')->with('success', 'Receita excluída com sucesso!');
    }
}