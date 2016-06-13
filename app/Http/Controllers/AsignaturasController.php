<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asignatura;
use App\Http\Requests;

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

    public function store($request)
    {
        $asignaturas= $request->all();
        dd($asignaturas);

        return redirect('index');
    }
}
