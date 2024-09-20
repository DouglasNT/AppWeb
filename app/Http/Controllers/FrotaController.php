<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frota;
use Illuminate\Support\Facades\Redirect;

class frotaController extends Controller
{
    //Inicio CRUD

    //Create
    function SalvarFrota(Request $request){
        $registros = $request->validate([
            'veiculo'=>'string|required',
            'motorista'=>'string|required',
            'placa'=>'string|required',
            'data'=>'string|required'
        ]);
        Frota::create($registros);
        return Redirect::route('mostrar-home');
    }

    //READ
    public function showFormulario(){
        return view('gerenciarFrota');
    }

    //Delete
    public function destroy(Frota $id){
        $id->delete();
        return Redirect::route('gerenciar-frota');
    }

    //Update  
    public function update(Frota $id, Request $request){
        $registros = $request->validate([
            'veiculo'=>'string|required',
            'motorista'=>'string|required',
            'placa'=>'string|required',
            'data'=>'string|required'
        ]);
        $id->fill($registros);
        $id->save();
        return Redirect::route('gerenciar-frota');
    }

    //Fim DRUD

    public function showHome(){
        return view('home');
    }

    public function gerenciarFrota(Request $request){
        $registros = Frota::query();
        $registros->when($request->veiculo, function($query, $valor){
            $query->where('veiculo', 'like','%'.$valor.'%');
        });
        $todosRegistros = $registros->get();
        return view('gerenciarFrota',['registrosFrota'=>$todosRegistros]);
    }

    public function mostarFrotaId(Agenda $id){
        return view('alterarFrota',['registrosFrota'->$id]);
    }

}