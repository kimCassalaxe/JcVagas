<?php

use App\Http\Controllers\JcVagas\JcVagasController;
use Illuminate\Support\Facades\Route;
/*


Route::get('jcVagas/',[JcVagasController::class,'home']);
*/
Route::get('/exibirVaga/{id}',[JcVagasController::class,'exibirVaga']);
Route::get('/listarvagas',[JcVagasController::class,'listar']);
Route::get('/vagas/criarvaga',[JcVagasController::class,'criarVaga'])->middleware('auth');
Route::post('/vagas',[JcVagasController::class,'store']);
Route::get('/jcVagas/test',[JcVagasController::class,'test']);
Route::get('/',[JcVagasController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
