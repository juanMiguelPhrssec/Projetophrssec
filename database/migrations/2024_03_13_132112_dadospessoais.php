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
        Schema::create('dadosPessoaiss', function(Blueprint $table){
            $table->id();
            $table->string('dadospessoais');
            $table->string('dadospessoais_sensiveis');
            $table->string('dadospessoais_especiais');
            $table->unsignedBigInteger('processos_id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dadosPessoais');
    }
};
