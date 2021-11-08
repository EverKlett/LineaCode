<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperacaoMaquinaPessoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operacao_maquina_pessoa', function (Blueprint $table) {
            $table->unsignedInteger('ope_codigo');
            $table->unsignedInteger('maq_codigo');
            $table->string('pes_cpf');
            $table->time('omp_tempo_medio');
            $table->text('omp_observacao');
            
            $table->primary(['ope_codigo', 'maq_codigo', 'pes_cpf']);
        });

        Schema::table('operacao_maquina_pessoa', function (Blueprint $table) {
            $table->foreign('ope_codigo')->references('ope_codigo')->on('operacao');
            $table->foreign('maq_codigo')->references('maq_codigo')->on('maquina');
            $table->foreign('pes_cpf')->references('pes_cpf')->on('pessoa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operacao_maquina_pessoa');
    }
}
