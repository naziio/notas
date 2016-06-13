<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asignatura;
use App\Http\Requests;
use Auth;

class AsignaturasController extends Controller
{
    public function index()
    {
        return view('asignaturas.home');
    }
    
    public function create()
    {

        return view('asignaturas.create');
    }
    
    public function show()
    {
        $asignaturas= Asignatura::all();
        return view('asignaturas.show', compact('asignaturas'));
    }

    public function store(Request $request)
    {
        $this->asignaturas =new Asignatura($request->all());
        $this->asignaturas->id_user= Auth::user()->id;
        //dd($asignaturas);
$this->asignaturas->save();
        return redirect('index');
    }
}
