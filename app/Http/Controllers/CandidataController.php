<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormCandidatoRequest;
use App\Models\Candidato;
use App\Models\User;
use App\Models\Vaga;
use App\Service\Candidatar;
use Illuminate\Http\Request;

class CandidataController extends Controller
{
    public function index(int $id, Request $request)
    {
        $user = User::find(auth()->id());
        $detalhe = Vaga::find($id);
        $mensagem = $request->session()->get('mensagem');

        return view('vagas.detalhes', compact('user', 'detalhe', 'mensagem'));
    }

    public function create(Request $request)
    {
        $user = User::find(auth()->id());
        $id = $request->id;

        return view('candidato.create', compact('user', 'id'));
    }

    public function store(FormCandidatoRequest $request, Candidatar $criaCandidato)
    {
        $criaCandidato->criaCandidato(
            $request->id,
            $request->nome,
            $request->sobrenome,
            $request->email,
            $request->telefone,
            $request->file('arquivo'),
            $request->motivo,
            $request->conhece
        );

        $request->session()->flash('mensagem', 'Seu curriculo foi enviado !');
        return redirect()->route('vagas');
    }

}
