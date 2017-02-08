@extends('layout')


@section('content')
    <ol class="breadcrumb">
        <li>Est&aacute;s en: <a href="/">Inicio</a></li>
        <li><a href="#">Empresas</a></li>
        <li class="active">Listado de empresas</li>
    </ol>

    <hr>

    <div class="panel panel-default border-top">
        <div class="panel-body">

            @include('partials.message')
            @include('partials.errors')

            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="gray">Listado de compañías </h3>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="{{route('empresas.create')}}">Crear empresa</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <table class="table ">
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>País</th>
                        <th>Estado</th>
                        <th>Ciudad</th>
                        <th>Descripci&oacute;n</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                    @foreach($companies as $company)
                        <tr>
                            <td>{{$company->name}}</td>
                            <td>{{$company->tipology}}</td>
                            <td>{{$company->country}}</td>
                            <td>{{$company->estate}}</td>
                            <td>{{$company->city}}</td>
                            <td>{{$company->description}}</td>
                            <td>{{$company->email}}</td>
                            <td>
                                <a href="{{route('empresas.edit',$company)}}">
                                    <button class="btn btn-primary btn-xs pull-left" data-title="Edit" type="">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                </a>


                                {!! Form::open(['route' => ['empresas.destroy',$company], 'method' => 'DELETE']) !!}
                                <button class="btn btn-danger btn-xs pull-right" data-title="Delete" data-toggle="modal"
                                        data-target="#delete" type="submit">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div class="text-center center-block">{{ $companies->links() }}</div>
            </div>
        </div>
    </div>
@endsection