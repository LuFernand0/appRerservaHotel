<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [ClienteController::class, 'showHome']);

Route::get("/cadastro-cliente", [ClienteController::class, 'showFormularioCadastro']);

Route::get("/cadastro-funcionario", [FuncionarioController::class, "showFormularioCadastro"]);