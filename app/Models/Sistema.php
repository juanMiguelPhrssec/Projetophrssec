<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sistema extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_sistema',
        'informativo_sistema',
        'siteoulinksistema',
        'responsavel_sistema',
        'secretaria',
        'departamento',
        'cargo',
    ];

    public function processos():HasMany
    {
        return $this->hasMany(Processo::class);
    }
}
