<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('pokemons', [PokemonController::class, 'listar']);
Route::get('pokemons/criar', [PokemonController::class, 'criar']);
Route::post('pokemons', [PokemonController::class, 'salvar']);
Route::get('pokemons/{id}/editar', [PokemonController::class, 'editar']);
Route::put('pokemons/{id}', [PokemonController::class, 'atualizar']);
Route::delete('pokemons/{id}', [PokemonController::class, 'excluir']);