<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
use Illuminate\Http\Request;

class VagaController extends Controller
{
    // Lista as vagas
    public function index()
    {
        $vagas = Vaga::all();
        return view('admin.vagas.index', compact('vagas'));
    }

    // Mostra o formulário de criar vaga
    public function create()
    {
        return view('admin.vagas.create');
    }

    // Salva a vaga no banco de dados
    public function store(Request $request)
    {
        // Valida se o gestor preencheu os dados corretamente
        $request->validate([
            'identificacao' => 'required|string|max:255',
            'status' => 'required|in:livre,ocupada,manutencao',
        ]);

        // Cria a vaga no banco
        Vaga::create($request->all());

        // Redireciona de volta para a lista com uma mensagem de sucesso
        return redirect()->route('admin.vagas.index')->with('sucesso', 'Vaga adicionada com sucesso!');
    }
}