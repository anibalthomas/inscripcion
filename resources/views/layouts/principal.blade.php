<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Posgrado - Inecol</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="/plantilla/css/bootstrap.min.css" rel="stylesheet">
    <link href="/plantilla/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="/plantilla/css/font-awesome.css" rel="stylesheet">
    <link href="/plantilla/css/style.css" rel="stylesheet">
    <link href="/plantilla/css/pages/dashboard.css" rel="stylesheet">
</head>

<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="#">Posgrado INECOL
                </a>
                <div class="nav-collapse">
                    <ul class="nav pull-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('perfil')}}">Perfil</a></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                                        Salir</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="subnavbar">
        <div class="subnavbar-inner">
            <div class="container">
                <ul class="mainnav">
                    <li class="{{ request()->is('home') ? 'active' : '' }}"><a href="{{ route('home')}}"><i class="icon-dashboard"></i><span>Inicio</span> </a> </li>
                    <li class="{{ request()->is('solicitud') ? 'active' : '' }}"><a href="{{ route('solicitud')}}"><i class="icon-list-alt"></i><span>Solicitud</span> </a> </li>
                    <li class="{{ request()->is('documentos') ? 'active' : '' }}"><a href="{{ route('documentos')}}"><i class="icon-long-arrow-down"></i><span>Documentos</span> </a></li>
                    {{-- <li><a href="charts.html"><i class="icon-bar-chart"></i><span>Charts</span> </a> </li>
        <li><a href="shortcodes.html"><i class="icon-code"></i><span>Shortcodes</span> </a> </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="icons.html">Icons</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="pricing.html">Pricing Plans</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Signup</a></li>
            <li><a href="error.html">404</a></li>
          </ul>
        </li> --}}
                </ul>
            </div>
        </div>
    </div>
    @yield('content')

    <div class=""
    style="background-color: black; position: absolute;  bottom: 0;  width: 100%;  height: 40px;  color: white;"
    >
        <div class="extra">
            <div class="extra-inner">
                <div class="container">
                    <div class="row">
                        <div class="span3">
                            <h4>
                                Cursos</h4>
                            <ul>
                                <li><a href="javascript:;">L.P. Maritza Malpica</a></li>
                                <li><a href="javascript:;">Tel.(228) 842 18 00 ext. 2005</a></li>
                                <li><a href="javascript:;">maritza.malpica
                                        <blade inecol.mx</a> </li>
                            </ul>
                        </div>
                        <div class="span3">
                            <h4>
                                Soporte Técnico</h4>
                            <ul>
                                <li><a href="javascript:;">Ing. Anibal T. Sanchez M.</a></li>
                                <li><a href="javascript:;">Tel.(228) 842 18 00 ext. 2011</a></li>
                                <li><a href="javascript:;">anibal.sanchez
                                        <blade inecol.mx</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="footer-inner">
                <div class="container">
                    <div class="row">
                        <div class="span12"> &copy; 2018 <a href="#">Posgrado INECOL</a>. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/plantilla/js/jquery-1.7.2.min.js"></script>
    <script src="/plantilla/js/excanvas.min.js"></script>
    <script src="/plantilla/js/chart.min.js" type="text/javascript"></script>
    <script src="/plantilla/js/bootstrap.js"></script>
    <script src="/plantilla/js/base.js"></script>

</body>

</html>
