<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Maquina extends Model
{
    use HasFactory;

    protected $table = 'maquina';
    private $maq_codigo;
    private string $maq_descricao;
    private string $maq_observacao;
    protected $fillable = array('maq_codigo', 'maq_descricao', 'maq_observacao');
    protected $primaryKey = 'maq_codigo';

    
    /**
     * Retorna todas as máquinas cadastradas
     * 
     * @return Maquina
     */
    function getAll() {
        return self::all();
    }

    /**
     * Retorna a máquina com o Id recebido por parâmetro.
     *
     * @return Maquina
     */
    public function getMaquina($iId) {
        $oMaquina = self::find($iId);

        if(is_null($oMaquina)) {
            return false;
        }

        return $oMaquina;
    }

    /**
     * Deleta a máquina que tem o id recebido por parâmetro.
     *
     * @return boolean
     */
    public function deleteMaquinaFromId($iId) {
        $oMaquina = self::find($iId);

        if(is_null($oMaquina)) {
            return false;
        }

        return $oMaquina->delete();
    }

    /**
     * Realiza o Update na máquina que veio por parâmetro.
     *
     * @return Maquina
     */
    public function updateMaquinaFromId($iId) {
        $oMaquina = self::find($iId);

        if(is_null($oMaquina)) {
            return false;
        }

        $oRequest = Request::all();

        $oMaquina->fill($oRequest);
        $oMaquina->save();

        return $oMaquina;
    }

    /**
     * Cadastra um novo máquina.
     *
     * @return Maquina
     */
    public function saveMaquina() {
        $oRequest = Request::all();

        $oMaquina = new Maquina($oRequest);

        $oMaquina->save();

        return $oMaquina;
    }
}
