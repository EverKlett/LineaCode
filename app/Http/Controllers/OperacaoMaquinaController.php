<?php

Namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OperacaoMaquina;
use Illuminate\Support\Facades\Request;

class OperacaoMaquinaController extends Controller {
    
    public function index() {
        return OperacaoMaquina::all();
    }
    
    public function store(Request $oRequest) {
        OperacaoMaquina::create($oRequest::all());
    }

    public function show($iCodigo) {
        return OperacaoMaquina::findOrfail($iCodigo);
    }

    public function update(Request $oRequest, $iCodigo) {
        $oMaquina = OperacaoMaquina::findOrfail($iCodigo);
        $oMaquina->update($oRequest::all());
    }
    
    public function destroy($iCodigo) {
        $oMaquina = OperacaoMaquina::findOrfail($iCodigo);
        $oMaquina->delete();
    }
}

?>