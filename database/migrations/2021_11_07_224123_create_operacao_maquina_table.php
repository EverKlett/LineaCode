<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperacaoMaquinaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operacao_maquina', function (Blueprint $table) {
            $table->integer('ope_codigo')->unsigned();
            $table->integer('maq_codigo')->unsigned();
            $table->time('opm_tempo_medio');
            $table->text('opm_observacao');
            
            $table->primary(['ope_codigo', 'maq_codigo']);
        });

        Schema::table('operacao_maquina', function (Blueprint $table) {
            $table->foreign('ope_codigo')->references('ope_codigo')->on('operacao');
            $table->foreign('maq_codigo')->references('maq_codigo')->on('maquina');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operacao_maquina');
    }
}
