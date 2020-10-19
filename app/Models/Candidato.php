<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Candidato extends Model
{
    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'telefone',
        'curriculo',
        'motivo',
        'conhece'
    ];

    public $timestamps = false;

    public function vaga()
    {
        return $this->belongsToMany(Vaga::class);
    }
}
