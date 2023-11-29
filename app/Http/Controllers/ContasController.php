<?php

namespace App\Http\Controllers;

use App\Models\ContasPagar;
use App\Models\ContasReceber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContasController extends Controller
{
    function index(){
        return view('adicionar');
    }
    function adicionarConta(Request $request){

        $values = $request->all();

        $tipoConta = $request->input("tipo");

        if ($tipoConta === "Pagar"){
            $contaPagar = new ContasPagar;
            $contaPagar->fill($values);

            $contaPagar->save();
        } elseif ($tipoConta === "Receber") {
            $contaReceber = new ContasReceber();
            $contaReceber->fill($values);

            $contaReceber->save();
        };
        
        return redirect()->route('listar_contas');
    }

    function listarContas(){
        //Faz o select no bd das duas tabelas
        $contas = DB::select('
        SELECT id, tipo, valor, descricao, dt_ven, status
        FROM contas_pagar

        UNION

        SELECT id, tipo, valor, descricao, dt_ven, status
        FROM contas_receber
        ');

        //Faz a soma das contas a pagar
        $contasPagar = ContasPagar::all();
        $totalPagar = $contasPagar->sum('valor');
        
        //Faz a soma das contas a receber
        $contasReceber = ContasReceber::all();
        $totalReceber = $contasReceber->sum('valor');
        
        //Faz a soma total das contas  
        $total = $totalReceber - $totalPagar;  
      
        return view('index', compact('contas', 'total', 'totalReceber', 'totalPagar'));
        }
        function editPagar ($id){
            $conta = ContasPagar::find($id);

            return view('editarPagar', ['id' => $id], compact('conta'));

        }

        function updatePagar(Request $request, $id){
            $conta = ContasPagar::find($id);
    
            $conta->update($request->all());
            
            return redirect()->route('listar_contas');
        }
        function editReceber ($id){
            $conta = ContasReceber::find($id);

            return view('editarPagar', ['id' => $id], compact('conta'));
        }
}
    function updatePagar(Request $request, $id){
        $conta = ContasReceber::find($id);

        $conta->update($request->all());
    
        return redirect()->route('listar_contas');
    }