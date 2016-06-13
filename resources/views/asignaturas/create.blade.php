@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8">


                {!! Form::open(['route'=>'asignaturas.store', 'method'=>'POST'])!!}
                <div class="form-group">
                    {!! Form::Label('nombre', 'Nombre asignatura: ') !!}
                    {!! Form::text('nombre',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::Label('descripcion', 'Descripcion breve: ') !!}
                    {!! Form::text('descripcion',null,['class'=>'form-control']) !!}
                </div>
                        <button type="submit" class="btn btn-default">Agregar</button>
                {!!Form::close() !!}

        </div>
        </div>
    </div>

@stop

