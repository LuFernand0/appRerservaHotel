<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function showFormularioCadastro(Request $request) {
        return view("formularioCadastroFuncionario");
    }
}
