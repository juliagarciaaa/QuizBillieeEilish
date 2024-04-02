<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/inicio', [ App\Http\Controllers\controllerQuiz::class, 'index' ]) -> name ('inicio');

Route::post('/dadospag1perguntas', [App\Http\Controllers\controllerQuiz::class, 'dadospag1perguntas']) -> name('dadospag1perguntas');

Route::post('/dadospag2perguntas', [App\Http\Controllers\controllerQuiz::class, 'dadospag2perguntas']) -> name('dadospag2perguntas');
//rotas para as demais paginas/ metodos

Route::post('/dadosPagina10', [App\Http\Controllers\controllerQuiz::class, 'dadosPagina10']) -> name('dadosPagina10');

Route::get('/pagina2', function () {
    return view('pagina2');
})->name('pagina2');