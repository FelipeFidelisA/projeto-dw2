<?php

namespace App\Http\Controllers;

use App\Models\Receita;
use Illuminate\Http\Request;

class ReceitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $receitas = Receita::with('user')->latest()->get();
        return view('receitas', compact('receitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($receita)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Receita::save($receita);
        return redirect()->route('receitas.index')->with('success', 'Receita criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Receita $receita)
    {
        return view('ver-receita', compact('receita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Receita $receita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Receita $receita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Receita $receita)
    {
        Receita::destroy($receita->id);
        return redirect()->route('receitas.index')->with('success', 'Receita excluída com sucesso!');
    }
}
