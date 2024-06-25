<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Colecao;
use \App\Http\Controllers\Colecao2;

Route::get('/cores', [Colecao::class, 'exibirCores']);
Route::get('/coresordenadas', [Colecao::class, 'exibirCoresOrdenadas']);
Route::get('/primeiracor', [Colecao::class, 'exibirPrimeiroElemento']);
/* ROTA PARA O EXERCÍCIO 1 */

/* ROTA PARA O EXERCÍCIO 2 */

Route::get('/inserirnovacor/{umaCor}', [Colecao::class, 'inserirElementoNoFinal']);
/* ROTA PARA O EXERCÍCIO 3 */

Route::get('/formnovacor', [Colecao::class, 'formularioNovaCorFinal']);
Route::post('/inserirnovacor', [Colecao::class, 'inserirElementoNoFinalPOST']);
/* ROTAS PARA O EXERCÍCIO 4 (LEMBRE-SE QUE SÃO 2 ROTAS)*/


Route::get('/formpesquisa', [Colecao::class, 'formularioPesquisa']);
Route::post('/pesquisaritem', [Colecao::class, 'buscarCor']);

Route::get('/filtrarporletra/{letra}', [Colecao::class, 'filtrarCores']);
Route::get('/mapearparamaiusculo', [Colecao::class, 'mapearCoresParaMaiusculo']);

////////////////////////////////////////////////
////////////////////////////////////////////////
////////////////////////////////////////////////

Route::get('/produtos', [Colecao2::class, 'exibirProdutos']);
Route::get('/produtosporpreco', [Colecao2::class, 'exibirProdutosPorPreco']);
Route::get('/produtosprecoigual/{valor}', [Colecao2::class, 'exibirProdutosPrecoIgual']);
Route::get('/produtosprecomaiorque/{valor}', [Colecao2::class, 'exibirProdutosPrecoMaioresQue']);
Route::get('/produtosprecomenorque/{valor}', [Colecao2::class, 'exibirProdutosPrecoMenoresQue']);
Route::get('/produtosentre/{valor1}/{valor2}', [Colecao2::class, 'exibirProdutosPrecoEntre']);
Route::get('/produtosporcategoria/{valor}', [Colecao2::class, 'exibirProdutosCategoria']);
/* ROTA PARA O EXERCÍCIO 5 */

/* ROTA PARA O EXERCÍCIO 6 */

