@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8">


                {!! Form::open(['route'=>'asignaturas.store', 'method'=>'POST'])!!}
                        <div class="form-group">
                            <label for="nombre">Nombre asignatura</label>
                            <input type="nombre" class="form-control" id="" placeholder="nombre">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion breve</label>
                            <input type="descripcion" class="form-control" id="" placeholder="descripcion">
                        </div>


                        <button type="submit" class="btn btn-default">Agregar</button>
                {!!Form::close() !!}

        </div>
        </div>
    </div>

@stop

