@extends('layouts.app')

@section('content')


    <div class="container text-center">
        <div class="row">
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-list-alt icon-home"></i>
                    <a href="{{url('asignaturas/create')}}" class="btn btn-warning btn-block btn-home-admin">AGREGAR ASIGNATURA</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-list-alt icon-home"></i>
                    <a href="{{url('asignaturas/show')}}" class="btn btn-warning btn-block btn-home-admin">VER ASIGNATURAS</a>
                </div>

            </div>
        </div>

    </div>

@stop

