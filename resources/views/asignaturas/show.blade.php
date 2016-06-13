@extends('layouts.app')

@section('content')


    <div class="container text-center">
        <div class="row">
            @foreach($asignaturas as $asignatura)

            <div class="col-md-6">
                <div class="panel">
                <div class="panel panel-heading">{{ $asignatura->nombre }}</div>
                <div class="panel panel-body">
                    <p>{{$asignatura->descripcion}}</p>
                    <a href="{{url('notas/home',$asignatura->id)}}" class="btn btn-warning btn-block btn-home-admin">VER NOTAS</a>
                </div>
                </div>
            </div>
@endforeach
        </div>

    </div>

@stop
