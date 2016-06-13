<?php

namespace App\Http\Controllers;

use App\Nota;
use App\Asignatura;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class NotasController extends Controller
{
    public function home($id){

        $asignatura=Asignatura::select('id')
        ->where('id',$id)->get();

        $notas=  Nota::where('id_asignatura',3)
        ->get();

       // return redirect()->route('notas.home');
        return view('notas.home', compact('notas'));
    }
}
