<div class="row">
    <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="" class="navbar-brand text-uppercase">INICIO</a></li>
                <li><a href="{{route('empresas.index')}}" class="navbar-brand text-uppercase">EMPRESAS</a></li>
                <li><a href="" class="navbar-brand text-uppercase">SERVICIOS</a></li>
                <li><a href="" class="navbar-brand text-uppercase">VALORA UN SERVICIO</a></li>
                <li><a href="" class="navbar-brand text-uppercase">CONTACTO</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="">Registro </a></li>
                @if(auth()->user())
                    <li><a href="">Cerrar sesi&oacute;n </a></li>
                @else
                    <li><a href="">Iniciar sesi&oacute;n </a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

</div>