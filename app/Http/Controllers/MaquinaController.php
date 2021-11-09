<?php

Namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Maquina;
use Illuminate\Support\Facades\Request;

class MaquinaController extends Controller {
    
    public function index() {
        return Maquina::all();
    }
    
    public function store(Request $oRequest) {
        Maquina::create($oRequest->all());
    }

    public function show($iCodigo) {
        return Maquina::findOrfail($iCodigo);
    }

    public function update(Request $oRequest, $iCodigo) {
        $oMaquina = Maquina::get($iCodigo);
        $oMaquina->update($oRequest->all());
    }
    
    public function destroy($iCodigo) {
        $oMaquina = Maquina::get($iCodigo);
        $oMaquina->destroy();
    }
}

?>