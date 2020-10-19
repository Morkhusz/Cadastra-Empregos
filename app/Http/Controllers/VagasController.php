<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vaga;
use App\Service\CriarVaga;
use App\Service\editaVaga;
use Illuminate\Http\Request;
use App\Http\Requests\FormVagaRequest;

class VagasController extends Controller
{
    public function index(Request $request)
    {
        $user = User::find(auth()->id());
        $vagas = Vaga::query()->orderBy('nome')->get();
        $contagem = Vaga::all()->count();

        $mensagem = $request->session()->get('mensagem');

        return view('vagas.index', compact('user', 'vagas', 'mensagem', 'contagem'));
    }

    public function create()
    {
        $user = User::find(auth()->id());

        return view('vagas.create', compact('user'));
    }

    public function store(FormVagaRequest $request, CriarVaga $criarVaga)
    {
        $vaga = $criarVaga->criadorDeVaga(
            $request->vaga,
            $request->pais,
            $request->cidade,
            $request->estado,
            $request->departamento,
            $request->tipo,
            $request->remoto,
            $request->descricao
        );

        $request->session()->flash('mensagem', "Vaga $vaga criada com sucesso");
        return redirect()->route('vagas');
    }

    public function show(int $id)
    {
        $user = User::find(auth()->id());
        $vaga = Vaga::find($id);

        return view('vagas.show', compact('user', 'vaga'));
    }

    public function edit(int $id, Request $request, editaVaga $editaVaga)
    {
        $editaVaga->editorDeVaga(
            $id,
            $request->vaga,
            $request->pais,
            $request->cidade,
            $request->estado,
            $request->departamento,
            $request->tipo,
            $request->remoto,
            $request->descricao
        );

        return redirect()->route('vagas');
    }

    public function destroy(int $id, Request $request)
    {
        Vaga::destroy($id);
        $request->session()->flash('mensagem', 'Vaga excluida com sucesso.');
        return redirect()->route('vagas');
    }

    public function search(Request $request)
    {
        $user = User::find(auth()->id());

        $vagas = Vaga::query()
        ->where('nome', 'LIKE', "%$request->search%")->get();

        return view('vagas.index', compact('vagas', 'user'));
    }
}
