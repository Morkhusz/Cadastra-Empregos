<?php
namespace App\Service;

use App\Models\Vaga;
use Illuminate\Support\Facades\DB;
use PDOException;

class editaVaga
{
    public function editorDeVaga(
        int $id,
        string $nome,
        string $pais,
        string $cidade,
        string $estado,
        string $departamento,
        string $tipo,
        bool $remoto = null,
        string $descricao
    ): void
    {
        try {
            DB::beginTransaction();
            $vaga = Vaga::find($id);
            $vaga->update([
                "nome" => $nome,
                "pais" => $pais,
                "cidade" => $cidade,
                "estado" => $estado,
                "departamento" => $departamento,
                "tipo" => $tipo,
                "remoto" => $remoto,
                "descricao" => $descricao
            ]);
            DB::commit();
        } catch (PDOException $th) {
            DB::rollback();
        }
    }
}
