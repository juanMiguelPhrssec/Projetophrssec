<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('processos',function(Blueprint $table){
            $table->id();
            $table->string('nome_do_processo');
            $table->string('nome_do_responsavel_processo');
            $table->string('telefone_responsavel_');
            $table->string('processo_email');
            $table->string('processo_descricao');
            $table->string('processo_coleta');
            $table->string('processo_retencao');
            $table->string('processo_exclusao');
            $table->string('processo_finalidade');
            $table->string('processo_previsao');
            $table->string('processo_previsao_tratamento_dados');
            $table->string('dados_pessoais');
            $table->string('dados_pessoais_sensiveis');
            $table->string('dados_pessoais_especiais');
            $table->string('dados_pessoais_processo_list');
            $table->string('profilling');
            $table->string('documento');
            $table->string('frequencia');
            $table->string('quantidade_dados_titulartratatados');
            $table->string('quantidade_pessoasespeciasesensiveis_dadostratados');
            $table->string('geografica');
            $table->string('areas_setores_instituicoes');
            $table->string('transferencia_de_dados_internacionais');
            $table->string('operacao_tratamento_mediante_tomadadecisao');
            $table->string('dado_formafisica');
            $table->string('auditoria');
            $table->string('observacoes');
            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
