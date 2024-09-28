<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogosController;

//Para visualizar as páginas
Route::get('/',[JogosController::class,'MostrarHome'])->name('home');
Route::get('/cadastro-jogos',[JogosController::class,'MostrarCadastroJogo'])->name('show-cadastro-jogos');
Route::get('/lista-jogos',[JogosController::class,'MostrarJogoNome'])->name('lista-jogos');
Route::get('/altera-jogos',[JogosController::class,'MostrarJogoCodigo'])->name('show-altera-jogos');

//para cadastrar
Route::post('/cadastro-jogos',[JogosController::class,'CadastrarJogo'])->name('cadastra-jogos');

//Para deletar
Route::delete('/apaga-jogos',[JogosController::class,'Destroy'])->name('apaga-jogos');

//para alterar
Route::put('/altera-jogos',[JogosController::class,'Update'])->name('altera-jogos');
