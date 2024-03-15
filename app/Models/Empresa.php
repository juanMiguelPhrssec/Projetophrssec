<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        "nome_da_empresa",
        "cnpj",
     
    ];
    
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class,'created_by');

    }
    public function pessoas():HasMany
    {
        return $this->hasMany(Pessoas::class);
    }
    
}
