@extends('layout')


@section('content')
    <ol class="breadcrumb">
        <li>Est&aacute;s en: <a href="/">Inicio</a></li>
        <li><a href="#">Empresas</a></li>
        <li class="active">Editando empresa</li>
    </ol>

    <hr>

    <div class="panel panel-default border-top">
        <div class="panel-body">

            @include('partials.message')
            @include('partials.errors')

            <div class="row">
                <div class="col-md-7">
                    <h3>EDITAR EMPRESA</h3>
                </div>

                {!! Form::model($company,['route' => ['empresas.update', $company] , 'method' => 'PATCH']) !!}
                <div class="col-md-5">
                    <button type="submit" class="btn btn-default pull-right btn-link">Actualizar cambios</button>
                </div>
                @include('empresa.partials.fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection