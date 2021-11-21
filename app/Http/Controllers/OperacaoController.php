<?php

Namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Operacao;
use Illuminate\Support\Facades\Request;

class OperacaoController extends Controller {
    
    public function index() {
        return Operacao::all();
    }
    
    public function store(Request $oRequest) {
        Operacao::create($oRequest::all());
    }

    public function show($iCodigo) {
        return Operacao::findOrfail($iCodigo);
    }

    public function update(Request $oRequest, $iCodigo) {
        $oOperacao = Operacao::findOrfail($iCodigo);
        $oOperacao->update($oRequest::all());
    }
    
    public function destroy($iCodigo) {
        $oOperacao = Operacao::findOrfail($iCodigo);
        $oOperacao->delete();
    }
}

?>