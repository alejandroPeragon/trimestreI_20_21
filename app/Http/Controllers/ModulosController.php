<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use Illuminate\Http\Request;

class ModulosController extends Controller
{
    public function index(){
        $modulos = Modulo::all();
        return view('modulos', array('arrayModulos'=>$modulos));
    }

    public function getEdit($id){
        $modulo = Modulo::find($id);
        return view('edit', array('modulo' => Modulo::find($id), 'id'=>$id));
    }

    public function putEdit(Request $request, $id){
        $modulo = Modulo::findOrFail($id);
        $modulo->nombre = $request->input('nombre');
        $modulo->especialidad_id = $request->input('especialidad_id') == null ? $modulo->especialidad_id : $request->input('especialidad_id');
        $modulo->ciclo_id = $request->input('ciclo_id') == null ? $modulo->ciclo_id : $request->input('ciclo_id');
        $modulo->save();
        return redirect(url('modulos'));
    }
}
