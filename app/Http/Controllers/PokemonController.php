<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function listar()
    {
        $pokemons = Pokemon::all(); 
        return view('pokemon.index', compact('pokemons'));
    }
    
    public function criar()
    {
        return view('pokemon.create');
    }
    
    public function salvar(Request $request)
    {
        Pokemon::create($request->all());
        return redirect('pokemons')->with('success', 'pokemon created successfully.');
    }
    
    public function editar($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        return view('pokemon.edit', compact('pokemon'));
    }
    
    public function atualizar(Request $request, $id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->update($request->all());
        return redirect('pokemons')->with('success', 'pokemon updated successfully.');
    }
    
    public function excluir($id)
    {
        $pokemon = Pokemon::findOrFail($id);
        $pokemon->delete();
        return redirect('pokemons')->with('success', 'pokemon deleted successfully.');
    }
}
