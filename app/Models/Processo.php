<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Processo extends Model
{
    use HasFactory;
    protected $table = 'processos';
    protected $fillable=[
        'nome_processo',
        'nome_do_responsavel_processo',
        'telefone_responsavel',
        'processo_email',
        'processo_descricao',
        'processo_ciclodevida',
        'processo_coleta',         
        'processo_exclusao',
        'processo_finalidade',
        'processo_previsao',
        'processo_previsao_tratamento_dados',
        'processo_resultados_pretendidos',
        'dados_pessoais',
        'dados_pessoais_especiais',
        'ctdadospessoais',
        'ct_dadospessoaissensiveis',
        'profilling',
        'documento',
        'frequencia',
        'frequenciaobs',
        'quantidade_dados_titulartratatados',
        'quantidade_pessoasespeciasesensiveis_dadostratados',
        'geografica',
        'processos_list_Areas_Compart',
        'processos_list_transf_dados_pessoais',
        'operacao_tratamento_mediante_tomadadecisao',
        'dado_formafisica',
        'auditoria',
        'observacoes',
    ];
    
    public function sistema():BelongsTo
    {
        return $this->belongsTo(Sistema::class);
    }

}
