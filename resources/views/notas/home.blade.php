@extends('layouts.app')

@section('content')


    <div class="container text-center">
        <div class="row">
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-list-alt icon-home"></i>
                    <a href="{{url('asignaturas/create')}}" class="btn btn-warning btn-block btn-home-admin">AGREGAR NOTA</a>
                </div>
            </div>
            @foreach($notas as $nota)
            <div class="col-md-3">
                <div class="panel">
                    nota: {{$nota->nota}}
                    porcentaje: {{$nota->porcentaje}}
                    pondera: {{$nota->nota*$nota->porcentaje}}
                </div>

            </div>
            @endforeach
        </div>

    </div>

@stop