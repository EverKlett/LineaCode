<?php

Namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pessoa;
use Illuminate\Support\Facades\Request;

class PessoaController extends Controller {
    
    public function index() {
        return Pessoa::all();
    }
    
    public function store(Request $oRequest) {
        Pessoa::create($oRequest::all());
    }

    public function show($sCPF) {
        return Pessoa::findOrfail($sCPF);
    }

    public function update(Request $oRequest, $sCPF) {
        $oPessoa = Pessoa::findOrfail($sCPF);
        $oPessoa->update($oRequest::all());
    }
    
    public function destroy($sCPF) {
        $oPessoa = Pessoa::findOrfail($sCPF);
        $oPessoa->delete();
    }
}

?>