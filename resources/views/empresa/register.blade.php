@extends('layout')


@section('content')
    <ol class="breadcrumb">
        <li>Est&aacute;s en: <a href="/">Inicio</a></li>
        <li><a href="#">Empresas</a></li>
        <li class="active">Registro de empresas</li>
    </ol>

    <hr>

    <div class="panel panel-default border-top">
        <div class="panel-body">

            {!! Alert::render() !!}
            @include('partials.errors')

            <div class="row">
                <div class="col-md-7">
                    <h3>REGISTRO DE EMPRESA</h3>
                </div>
                {!! Form::open(['url' => route('empresas.store'), 'method' => 'POST']) !!}
                <div class="col-md-5">
                    <button type="submit" class="btn btn-default btn-link pull-right">Guardar</button>
                </div>
                @include('empresa.partials.fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection