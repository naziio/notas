@extends('layouts.app')

@section('content')


<div class="container text-center">
        <div class="row">
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-list-alt icon-home"></i>
                    <a href="{{url('asignaturas')}}" class="btn btn-warning btn-block btn-home-admin">ASIGNATURAS</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel">
                    <i class="fa fa-list-alt icon-home"></i>
                    <a href="" class="btn btn-warning btn-block btn-home-admin">USUARIOS</a>
                </div>

            </div>
        </div>

</div>

@stop

