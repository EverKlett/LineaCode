<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    use HasFactory;

    protected $table = 'maquina';
    private $maq_codigo;
    private string $maq_descricao;
    private string $maq_observacao;
    protected $fillable = [
        'maq_codigo',
        'maq_descricao',
        'maq_observacao'
    ];
    protected $primaryKey = 'maq_codigo';
    public $timestamps = false;
}
