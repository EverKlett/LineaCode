<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Pessoa extends Model
{
    protected $table = 'pessoa';
    private $pes_cpf;
    private string $pes_nome;
    private Date $pes_data_nascimento;
    private string $pes_observacao;
    protected $fillable = [
        'pes_cpf',
        'pes_nome',
        'pes_data_nascimento',
        'pes_observacao'
    ];
    protected $primaryKey = 'pes_cpf';
    public $timestamps = false;

    use HasFactory;
}
