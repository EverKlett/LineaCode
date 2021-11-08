<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoaOperacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_operacao', function (Blueprint $table) {
            $table->string('pes_cpf');
            $table->unsignedInteger('ope_codigo');
            $table->text('peo_observacao');
            
            $table->primary(['pes_cpf', 'ope_codigo']);
        });

        Schema::table('pessoa_operacao', function (Blueprint $table) {
            $table->foreign('pes_cpf')->references('pes_cpf')->on('pessoa');
            $table->foreign('ope_codigo')->references('ope_codigo')->on('operacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa_operacao');
    }
}
