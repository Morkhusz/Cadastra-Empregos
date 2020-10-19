<?php
namespace App\Service;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use PDOStatement;

class CriarVaga
{
    public function criadorDeVaga(
        string $nome,
        string $pais,
        string $cidade,
        string $estado,
        string $departamento,
        string $tipo,
        string $remoto = null,
        string $descricao
    ) : string
    {
        try {
            DB::beginTransaction();
            $user = User::find(auth()->id());
            $vaga = $user->vagas()->create([
                'nome' => $nome,
                'pais' => $pais,
                'cidade' => $cidade,
                'estado' => $estado,
                'departamento' => $departamento,
                'tipo' => $tipo,
                'remoto' => $remoto,
                'descricao' => $descricao,
            ]);
            DB::commit();
        } catch (PDOStatement $th) {
            DB::rollback();
        }

        return $vaga->nome;
    }
}
