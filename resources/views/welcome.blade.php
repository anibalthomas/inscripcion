<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cursos - INECOL</title>
    <link href="../dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="../dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/dashboard/css/grayscale.min.css" rel="stylesheet">
    <link href="/dashboard/css/estilo.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            {{-- <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a> --}}
            <img style="width: 25%;" class="navbar-brand" src="/dashboard/img/logo.png" alt="logo">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            @if (Route::has('login'))
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Home</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Inscripción</a>
                    </li>
                    @endauth
                </ul>
            </div>
            @endif
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
                <h1 class="mx-auto my-0 text-uppercase">Cursos Posgrado INECOL 2018</h1>
                {{-- <h2 class="text-white-50 mx-auto mt-2 mb-5">A free, responsive, one page Bootstrap theme created by Start Bootstrap.</h2> --}}
                <a href="#about" class="btn btn-primary js-scroll-trigger">GUÍA DE INSCRIPCIÓN DE ESTUDIANTES VISITANTES</a>
            </div>
        </div>
    </header>

    <!-- About Section -->
    {{-- <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4">Built with Bootstrap 4</h2>
            <p class="text-white-50">Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
              <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open
               source, and you can use it for any purpose, personal or commercial.</p>
          </div>
        </div>
        <img src="/dashboard/img/ipad.png" class="img-fluid" alt="">
      </div>
    </section> --}}

    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light">
        <div class="container">

            <!-- Featured Project Row -->
            <div class="row mb-4 mb-lg-5">
                <div class="col-xl-12 col-lg-12">
                    <h2 style="align: center;">Guía de inscripción de estudiantes visitantes</h2><br>
                    {{-- <img class="img-fluid mb-3 mb-lg-0" src="/dashboard/img/bg-masthead.jpg" alt=""> --}}

                    <div class="featured-text text-center text-lg-left">
                        <button class="accordion">¿Quiénes son estudiantes visitantes?</button>
                        <div class="panel">
                            <br>
                            <p>Un alumno visitante es aquel que no está inscrito en alguno de los programas de Posgrado del Instituto de Ecología, A.C. (INECOL) pero desea asistir a los cursos que aquí se imparten. En general se clasifican en:
                                <ol>
                                    <li>Público en general</li>
                                    <li>Estudiantes de otros Posgrados</li>
                                    <li>Tesistas del INECOL</li>
                                    <li>Personal del INECOL</li>
                                </ol>
                            </p>
                        </div>

                        <button class="accordion">Entrega de documentación</button>
                        <div class="panel"><br>
                            <p>Enviar todos los documentos completos en el orden indicado a la cuenta de correo electrónico: <a href="mailto:cursos@inecol.mx.?subject=feedback">cursos@inecol.mx</a><br><br>
                                Ubicación de la Asistente de cursos:<br><br>
                                Acudir a la Coordinación de Servicios Escolares, en la ventanilla única de atención ubicada en el Edificio de Posgrado, 2do nivel en horario de 9:00 a 14:00 hrs. de lunes a viernes y en días hábiles.</p>
                        </div>

                        <button class="accordion">Pago del curso</button>
                        <div class="panel"><br>
                            <p>La oferta de cursos la puede ver en este <a href="http://www.inecol.mx/posgrado/index.php/admision/cursos">liga</a>. El pago se puede realizar:
                                <ol>
                                    <li>Directamente en la caja general del INECOL</li>
                                    <li>Depósito bancario</li>
                                    <li>Transferencia bancaria</li>
                                </ol>
                                Los datos de pago así como lo necesario para registrar su pago y facturación se encuentran en la <a href="http://posgrado.inecol.edu.mx/evaluaciones/publico/Cursos/2_Guia_Pago3.pdf">Guía de Pago.</a>
                            </p>
                        </div>

                        <button class="accordion">Requisitos de inscripción</button>
                        <div class="panel"><br>
                            <p>Los cursos que se imparten en el INECOL tienen nivel de Posgrado, por lo tanto, es importante que el estudiante cuente con t&iacute;tulo de licenciatura o comprobante de que se cuenta con el grado.</p>
                            <p>Dependiendo del tipo de estudiante visitante los requisitos de inscripci&oacute;n se deben enviar en el&nbsp;&nbsp; orden que se muestra a continuaci&oacute;n y son los siguientes:</p>
                            <ol>
                                <li>P&uacute;blico en general</li>
                                <ol type="a">
                                    <li>Registrar sus dato <a href="http://posgrado.inecol.edu.mx/evaluaciones/publico/Doc_p/SP-A-10.docx">SPA-10</a>. Inscripción de alumno visitante debidamente llenado</li>
                                    <li>Copia de la credencial de elector o pasaporte</li>
                                    <li>Copia del título o cédula del grado anterior</li>
                                    <li>Formato <a href="http://posgrado.inecol.edu.mx/evaluaciones/publico/Doc_p/SP-A-16.docx">SPA-16</a>. Recibo de pago (ver <a href="http://posgrado.inecol.edu.mx/evaluaciones/publico/Cursos/2_Guia_Pago3.pdf">Guía
                                            de pago</a>)</li>
                                </ol><br>
                                <li>Estudiantes de otros Posgrados</li>
                                <ol type="a">
                                    <li>Formato <a href="http://posgrado.inecol.edu.mx/evaluaciones/publico/Doc_p/SP-A-10.docx">SPA-10</a>. Inscripción de alumno visitante debidamente llenado</li>
                                    <li>Constancia de la institución indicando si es alumno vigente.</li>
                                    <li>Copia de la credencial de elector o pasaporte.</li>
                                    <li>Copia del título o cédula del grado anterior.</li>
                                    <li>Formato <a href="http://posgrado.inecol.edu.mx/evaluaciones/publico/Doc_p/SP-A-16.docx">SPA-16</a>. Recibo de pago (ver <a href="http://posgrado.inecol.edu.mx/evaluaciones/publico/Cursos/2_Guia_Pago3.pdf">Guía
                                            de pago</a>) o carta de respaldo de la institución solicitando exención de pago y/o mencionando el convenio institucional.</li>
                                </ol><br>
                                <li>Estudiantes registrados del INECOL (Tesistas, servicio social, Estancia, etc.)</li>
                                <ol type="a">
                                    <li>Formato <a href="http://posgrado.inecol.edu.mx/evaluaciones/publico/Doc_p/SP-A-10.docx">SPA-10</a>. Inscripción de alumno visitante debidamente llenado.</li>
                                    <li>Copia de la credencial de elector o pasaporte.</li>
                                    <li>Copia de la credencial vigente en el INECOL o constancia de estar debidamente registrados en la Secretaría Académica.</li>
                                    <li>Copia del título o cédula del grado anterior.</li>
                                </ol>
                                <li>Personal del INECOL</li>
                                <ol type="a">
                                    <li>Formato <a href="http://posgrado.inecol.edu.mx/evaluaciones/publico/Doc_p/SP-A-10.docx">SPA-10</a>. Inscripción de alumno visitante debidamente llenado</li>
                                    <li>Copia de la credencial de elector o pasaporte</li>
                                    <li>Copia de la credencial del INECOL vigente</li>
                                    <li>Copia del título o cédula del grado anterior</li>
                                </ol>
                            </ol>
                            <p>En caso de ser extranjeros presentar adicionalmente:</p>
                            <ol>
                                <li>Copia del Pasaporte</li>
                                <li>Copia del documento de ingreso al pa&iacute;s (formas migratorias vigentes) (s&oacute;lo en caso de que la estancia sea mayor a un mes)</li>
                                <li>Copia de documentos apostillados o legalizados, seg&uacute;n sea el caso (s&oacute;lo en caso de que la estancia sea mayor a un mes).</li>
                            </ol>
                        </div>

                        <button class="accordion">Descuentos y condonaciones de pago</button>
                        <div class="panel"><br>
                          <p>En algunas ocasiones se realizan descuentos para el pago del curso. De acuerdo con las políticas de cada
curso y del Manual de Operación de Posgrado pueden ser los siguientes:</p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Tipo de estudiante</th>
                                        <th>Tipo de condonación</th>
                                        <th>Notas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Estudiantes pertenecientes a otra
                                            institución con las cuales se tenga
                                            convenio de colaboración vigente,
                                            siempre y cuando el convenio lo
                                            especifique</td>
                                        <td>Exentos de pago</td>
                                        <td>Se entrega Constancia con calificación.</td>
                                    </tr>
                                    <tr>
                                        <td>Estudiantes de posgrado de otra
                                            institución que no tengan
                                            convenio o se venció el
                                            convenio.</td>
                                        <td>50% de reducción
                                            del costo del curso</td>
                                        <td>Se entrega Constancia con
                                            calificación.</td>
                                    </tr>
                                    <tr>
                                        <td>Pasantes de licenciatura</td>
                                        <td>Cubrir el 100% del costo del curso</td>
                                        <td>Se entrega Constancia, pero no obtendrán calificación numérica</td>
                                    </tr>
                                    <tr>
                                        <td>Estudiantes de licenciatura, Tesistas, servicio social o Estancia dirigidos por un investigador del INECOL</td>
                                        <td>Exentos de pago</td>
                                        <td>Deberá presentar constancia de estar registrados en la Secretaría Académica del INECOL. Se entrega Constancia, pero no obtendrán calificación numérica.</td>
                                    </tr>
                                    <tr>
                                        <td>Personal del INECOL</td>
                                        <td>Exentos de pago</td>
                                        <td>Se entrega Constancia, pero no obtendrán calificación numérica.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>La Constancia se enviará por correo electrónico al correo que indicó en el formato SPA-10. Inscripción de alumno visitante, no se entregan impresas.</p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Project One Row -->
            {{-- <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                <div class="col-lg-6">
                    <img class="img-fluid" src="/dashboard/img/demo-image-01.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Misty</h4>
                                <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                                <hr class="d-none d-lg-block mb-0 ml-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center no-gutters">
                <div class="col-lg-6">
                    <img class="img-fluid" src="/dashboard/img/demo-image-02.jpg" alt="">
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Mountains</h4>
                                <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                                <hr class="d-none d-lg-block mb-0 mr-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </section>

    <!-- Signup Section -->
    {{-- <section id="signup" class="signup-section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto text-center">

                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

                    <form class="form-inline d-flex">
                        <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
                        <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
                    </form>

                </div>
            </div>
        </div>
    </section> --}}

    <!-- Contact Section -->
    <section class="contact-section bg-black">
        <div class="container">

            <div class="row">

                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Dirección</h4>
                            <hr class="my-4">
                            <div class="small text-black-50">Carretera antigua a Coatepec No. 351, El Haya, Xalapa, Veracruz, México. Edificio de Posgrado, 2do nivel</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4">
                            <div class="small text-black-50">
                                <a href="mailto:cursos@inecol.mx?subject=feedback">cursos@inecol.mx</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Teléfono</h4>
                            <hr class="my-4">
                            <div class="small text-black-50">tel +52 (228) 8 42 18 00 ext. 2005</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="social d-flex justify-content-center">

                <a href="https://www.facebook.com/InecolPosgrado" class="mx-2">
                    <i class="fab fa-facebook-f"></i>
                </a>

            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
        <div class="container">
            Copyright &copy; INECOL 2018
        </div>
    </footer>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>

    <!-- Bootstrap core JavaScript -->
    <script src="../dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="../dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../dashboard/js/grayscale.min.js"></script>
</body>

</html>
