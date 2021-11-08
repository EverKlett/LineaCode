<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Type\Integer;

class OperacaoMaquina extends Model
{
    protected $table = 'operacao_maquina';
    private Integer $maq_codigo;
    private Integer $ope_codigo;
    private $opm_tempo_medio;
    private string $opm_observacao;

    use HasFactory;
}
