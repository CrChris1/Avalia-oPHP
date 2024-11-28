<?php

use App\Http\Controllers\JogadorController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro_jogador', [JogadorController::class, "formCriarJogador"]);
Route::get('/lista_jogadores', [JogadorController::class, "listar"]);
Route::post('/criar_jogador', [JogadorController::class, 'criar']);
Route::delete("/deletar_jogador/{id}", [JogadorController::class, 'deletar']);
Route::get("/editar_jogador/{id}", [JogadorController::class, 'formEditarJogador']);
Route::put("/editar_jogador/{id}", [JogadorController::class, 'editar']);



Route::get('/cadastro_time', [TimeController::class, "formCriarTime"]);
Route::get('/listar_time', [TimeController::class, "listar"]);
Route::post('/criar_time', [TimeController::class, 'criar']);
Route::delete("/deletar_time/{id}", [TimeController::class, 'deletar']);
Route::get("/editar_time/{id}", [TimeController::class, 'formEditarTime']);
Route::put("/editar_time/{id}", [TimeController::class, 'editar']);



Route::get('/', [AppController::class, 'inicial']);