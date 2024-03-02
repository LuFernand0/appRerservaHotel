<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function showFormularioCadastro(Request $request) {
        return view("formularioCadastroReserva");
    }
}
