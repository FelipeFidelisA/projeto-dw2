<?php

namespace App\Http\Controllers;

use App\Models\Despesa;
use Illuminate\Http\Request;

class DespesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $despesas = Despesa::with('user')->latest()->get();
        return view('despesas', compact('despesas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('despesas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'descricao' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'valor' => 'required|numeric|min:0',
            'data_referencia' => 'required|date',
            'is_recorrente' => 'boolean',
        ]);
        
        $validated['user_id'] = auth()->id();
        $validated['is_recorrente'] = $request->has('is_recorrente');
        
        Despesa::create($validated);
        
        return redirect()->route('despesas.index')->with('success', 'Despesa registrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Despesa $despesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Despesa $despesa)
    {
        // Removendo verificação de usuário temporariamente
        return view('despesas.edit', compact('despesa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Despesa $despesa)
    {
        // Removendo verificação de usuário temporariamente
        
        $validated = $request->validate([
            'descricao' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'valor' => 'required|numeric|min:0',
            'data_referencia' => 'required|date',
            'is_recorrente' => 'boolean',
        ]);
        
        $despesa->descricao = $validated['descricao'];
        $despesa->categoria = $validated['categoria'];
        $despesa->valor = $validated['valor'];
        $despesa->data_referencia = $validated['data_referencia'];
        $despesa->is_recorrente = $request->has('is_recorrente');
        $despesa->save();
        
        return redirect()->route('despesas.index')->with('success', 'Despesa atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Despesa $despesa)
    {
        // Removendo verificação de usuário temporariamente
        
        $despesa->delete();
        
        return redirect()->route('despesas.index')->with('success', 'Despesa excluída com sucesso!');
    }
}
