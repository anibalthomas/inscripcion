<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Posgrado - Inecol</title>
    <link href="img/favicon.png" rel="icon">
    <link href="/front/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="/front/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/front/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="/front/css/style.css" rel="stylesheet">
    <link href="/front/css/style-responsive.css" rel="stylesheet">
</head>

<body>
    <section id="container">
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>CURSOS<span>INECOL</span></b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->

                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">Tienes 5 mensajes</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/front/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                        <span class="from">Zac Snider</span>
                                        <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/front/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                        <span class="from">Divya Manian</span>
                                        <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                        Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/front/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                        <span class="from">Dan Rogers</span>
                                        <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/front/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                        <span class="from">Dj Sherman</span>
                                        <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">Ver todos los mensajes</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">Tienes 7 solicitudes</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Server Overloaded.
                                    <span class="small italic">4 mins.</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                    Memory #2 Not Responding.
                                    <span class="small italic">30 mins.</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                    Disk Space Reached 85%.
                                    <span class="small italic">2 hrs.</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="label label-success"><i class="fa fa-plus"></i></span>
                                    New User Registered.
                                    <span class="small italic">3 hrs.</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </header>
        <!--header end-->
        <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="profile.html"><img src="{{ Storage::url(auth()->user()->avatar)}}" class="img-circle" width="80"></a></p>
                    <h5 class="centered">{{ Auth::user()->name }}</h5>
                    <li class="mt">
                        <a class="{{ request()->is('home') ? 'active' : '' }}" href="{{ route('home')}}">
                            <i class="fa fa-dashboard"></i>
                            <span>Inicio</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a class="{{ request()->is('solicitud') ? 'active' : '' }}" href="{{ route('solicitud')}}">
                            <i class="fa fa-desktop"></i>
                            <span>Solicitud</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a class="{{ request()->is('documentos') ? 'active' : '' }}" href="{{ route('documentos')}}">
                            <i class="fa fa-cogs"></i>
                            <span>Documentos</span>
                        </a>
                        {{-- <ul class="sub">
                            <li><a href="grids.html">Grids</a></li>
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="todo_list.html">Todo List</a></li>
                            <li><a href="dropzone.html">Dropzone File Upload</a></li>
                            <li><a href="inline_editor.html">Inline Editor</a></li>
                            <li><a href="file_upload.html">Multiple File Upload</a></li>
                        </ul> --}}
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Estudiantes</span>
                        </a>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper site-min-height">


                @yield('content')


            </section>
            <!-- /wrapper -->
        </section>
        <!-- /MAIN CONTENT -->
        <!--main content end-->
        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                <p>
                    &copy; Copyrights <strong>INECOL</strong>.
                </p>
                <div class="credits">
                    <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->

                </div>
                <a href="blank.html#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/front/lib/jquery/jquery.min.js"></script>
    <script src="/front/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="/front/lib/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="/front/lib/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="/front/lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/front/lib/jquery.scrollTo.min.js"></script>
    <script src="/front/lib/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="/front/lib/common-scripts.js"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    @include('sweetalert::alert')

</body>

</html>
