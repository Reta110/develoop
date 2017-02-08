</div>

<hr>

<h4 class="gray">INFORMACI&Oacute;N B&Aacute;SICA</h4>
<div class="row">
    <div class="col-md-7">


        <div class="jumbotron ">

            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group">
                        {{Form::label('name','Nombre comercial de la empresa')}}
                        {{Form::text('name', old('name'),['class' => "form-control"]) }}
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <div class="form-group">
                            {{Form::label('tipology','Tipología de la empresa')}}
                            {{Form::select('tipology', [
                                'Sociedad anónima (SA)' => 'Sociedad anónima (SA)',
                            ],
                            old('tipology'),
                            ['placeholder' => 'Tipología de la empresa',
                            'class' => "form-control"])
                            }}
                        </div>
                    </div>
                </div>
            </div>

            <div class=" row">
                <div class="col-xs-4">
                    <div class="form-group">
                        {{Form::label('country','País')}}
                        {{Form::select('country', [
                            'Afganistan' => 'Afganistan',
                            'Brasil' => 'Brasil',
                            'Colombia' => 'Colombia',
                            'Perú' => 'Perú',
                            'Venezuela' => 'Venezuela',
                        ],
                        old('country'),
                        ['placeholder' => 'Seleccione un país',
                        'class' => "form-control"])
                        }}
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="form-group">
                        {{Form::label('estate','Estado')}}
                        {{ Form::text('estate', old('estate'),['class' => "form-control"])}}
                    </div>
                </div>
                <div class=" col-xs-4">
                    <div class="form-group">
                        {{Form::label('city','Ciudad')}}
                        {{ Form::text('city', old('city'),['class' => "form-control"])}}
                    </div>
                </div>
            </div>

        </div>

        <h4 class=" gray">INFORMACI&Oacute;N DE REGISTRO</h4>

        <div class="jumbotron ">

            <div class="row">
                <div class="col-xs-4">
                    {{Form::label('email','Email')}}
                    {{ Form::text('email', old('email'),['class' => "form-control"])}}
                </div>
                <div class=" col-xs-4">
                    {{Form::label('password','Password')}}
                    {{Form::password('password',['class' => "form-control"])}}
                </div>
                <div class=" col-xs-4">
                    {{Form::label('password_confirmation','Repetir  Password')}}
                    {{Form::password('password_confirmation',['class' => "form-control"])}}                </div>
            </div>

        </div>
    </div>

    <div class=" col-md-5">
        <div class="jumbotron description">

            <div class="form-group">
                {{Form::label('description','Descripción de la empresa')}}
                {{Form::textarea('description',null, ['rows' => '12', 'class' => "form-control"])}}
            </div>
        </div>
    </div>
</div>