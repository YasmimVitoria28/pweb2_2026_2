<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('main');
});

Route::get('/aluno', [AlunoController::class, 'index']);
Route::get('/aluno/create', [AlunoController::class, 'create']);
Route::post('/aluno/store', [AlunoController::class, 'store'])-> name('aluno.store');

Route::resource('curso',\\App\Http\Controllers\CursoController:: class);
Route::resource('turma',\\App\Http\Controllers\TurmaController:: class);
Route::resource('matricula',\\App\Http\Controllers\MatriculaController:: class);
/*
Route::get('/aluno', function () {
    return view('aluno.list');
    //return "<h3>Olá mundo Laravel!</h3>";
});
*/
