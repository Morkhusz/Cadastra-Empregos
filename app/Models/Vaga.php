<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $fillable = [
        'nome',
        'pais',
        'cidade',
        'estado',
        'departamento',
        'tipo',
        'remoto',
        'descricao',
        'users_id',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function candidatos()
    {
        return $this->hasMany(Candidato::class);
    }

    public function getCidadeAttribute($cidade)
    {
        return $this->cidade = ucwords($cidade);
    }

    public function getNomeAttribute($nome)
    {
        return $this->nome = ucwords($nome);
    }

    public function getEstadoAttribute($estado)
    {
        $nomeEstado = [
            'Acre','Alagoas','Amapá','Amazonas','Bahia','Ceará','Espírito Santo','Goiás',
            'Maranhão','Mato Grosso','Mato Grosso do Sul','Minas Gerais','Pará','Paraíba',
            'Paraná','Pernambuco','Piauí','Rio de Janeiro','Rio Grande do Norte','Rio Grande do Sul',
            'Rondônia','Roraima','Santa Catarina','São Paulo','Sergipe','Tocantins','Distrito Federal'
        ];

        $siglas = [
            'AC','AL','AP','AM','BA','CE','ES',
            'GO','MA','MT','MS','MG','PA','PB',
            'PR','PE','PI','RJ','RN','RS','RO',
            'RR','SC','SP','SE','TO','DF'
        ];

        return $this->estado = str_replace($nomeEstado, $siglas, ucwords($estado));
    }

    public function getCreatedAtAtribbute($contagem)
    {
        return $this->createdAt = count($contagem);
    }

}
