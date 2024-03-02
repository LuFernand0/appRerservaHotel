<?php

namespace App\Http\Controllers;

use App\Models\Quarto;
use Illuminate\Http\Request;
use Redirect;


class QuartoController extends Controller
{

    public function showFormularioCadastroQuarto(Request $request) {
        return view("formularioCadastroQuarto");
    }

    public function cadQuarto(Request $request)
    {
        $dadosValidos = $request->validate([
            'numero' => 'string|required',
            'tipo' => 'string|required',
            'valor' => 'string|required'
        ]);

        Quarto::create($dadosValidos);
        return Redirect::route('home');
    }
}
