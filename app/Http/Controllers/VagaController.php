<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
use Illuminate\Http\Request;

class VagaController extends Controller
{
    public function index()
    {
        // Busca todas as vagas cadastradas no banco de dados
        $vagas = Vaga::all();
        
        // Retorna a interface visual 'index', enviando as variáveis
        return view('admin.vagas.index', compact('vagas'));
    }
}