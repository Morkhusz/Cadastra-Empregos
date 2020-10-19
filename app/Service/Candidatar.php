<?php
namespace App\Service;

use PDOException;
use App\Models\Vaga;
use Illuminate\Support\Facades\DB;

class Candidatar
{
    public function criaCandidato(
        int $id,
        string $nome,
        string $sobrenome,
        string $email,
        string $telefone,
        $arquivo,
        string $motivo,
        string $conhece
    ): void
    {

        try {
            DB::beginTransaction();
            $vaga = Vaga::find($id);
            $vaga->candidatos()->create([
                'nome' => $nome,
                'sobrenome' => $sobrenome,
                'email' => $email,
                'telefone' => $telefone,
                'curriculo' => $arquivo->store('curriculos'),
                'motivo' => $motivo,
                'conhece' => $conhece
            ]);
            DB::commit();
        }catch(PDOException $e) {
            DB::rollback();
        }
    }
}
