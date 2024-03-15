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
        Schema::create('ctdados_pessoais_sensiveiss',function(Blueprint $table){
            $table->id();
            $table->string('pessoassensiveisdadosextras');
            $table->string('descricao')->nullable();

            $table->string('fonteretencao')->nullable();
            $table->string('tempoderetencao')->nullable();
            $table->unsignedBigInteger('processos_id');
            $table->string('basededados')->nullable();
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
