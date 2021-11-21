<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operacao extends Model
{
    use HasFactory;

    protected $table = 'operacao';
    private $ope_codigo;
    private string $ope_descricao;
    private string $ope_observacao;
    protected $fillable = [
        'ope_codigo',
        'ope_descricao',
        'ope_observacao'
    ];
    protected $primaryKey = 'ope_codigo';
    public $timestamps = false;
}
