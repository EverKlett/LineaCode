<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Type\Integer;

class Operacao extends Model
{
    protected $table = 'operacao';
    private Integer $ope_codigo;
    private string $ope_descricao;
    private string $ope_observacao;
    
    use HasFactory;
}
