@extends('layouts.principal')

@section('content')
  <h3><i class="fa fa-angle-right"></i>Inicio</h3>
  <div class="row mt">

          <!-- /col-lg-12 -->
          <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li class="active">
                    <a data-toggle="tab" href="#overview">Cursos</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#contact" class="contact-map">Datos de usuario</a>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#edit">Editar Perfil</a>
                  </li>
                </ul>
              </div>
              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <div id="overview" class="tab-pane active">
                    <div class="row">
                      <div class="col-md-6 detailed">
                        <h4>Lista de cursos solitados</h4>
                      <div class="col-md-8 col-md-offset-2 mt">
                        <p>
                            @foreach (auth()->user()->cursos as $curso)
                            <p>{{ $curso->nombre}}</p>
                            @endforeach
                      </p>
                      </div>
                    </div>
                      <div class="col-md-6 detailed">
                        <h4>Lista de cursos inscritos</h4>
                      </div>

                    </div>

                  </div>
                  <!-- /tab-pane -->
                  <div id="contact" class="tab-pane">
                    <div class="row">
                      <div class="col-md-6 detailed">
                        <h4>Datos Personales</h4>
                        <div class="col-md-8 col-md-offset-2 mt">
                          <p>Nombre: {{auth()->user()->name}} {{auth()->user()->apellido_p}} {{auth()->user()->apellido_m}} <br>
                          Teléfono: {{auth()->user()->telefono}}<br>
                          Edad: {{auth()->user()->edad}}<br>
                          País: {{auth()->user()->pais}}<br>
                          Nacionalidad: {{auth()->user()->nacionalidad}}<br>
                          Estado: {{auth()->user()->estado}}<br>
                          Municipio: {{auth()->user()->municipio}}<br>
                          Calle: {{auth()->user()->calle_num}}<br>
                          C.P.: {{auth()->user()->cp}}<br>
                        </p>
                        </div>
                      </div>
                      <!-- /col-md-6 -->
                      <div class="col-md-6 detailed">
                        <h4>Datos curriculares</h4>
                        <div class="col-md-8 col-md-offset-2 mt">
                          <p>
                            Ultimos estudios: {{auth()->user()->ult_estudios}}<br>
                            institución: {{auth()->user()->institucion}}<br>
                            Lugar de trabajo: {{auth()->user()->lug_trabajo}}<br>
                            Puesto: {{auth()->user()->puesto}}<br>
                          </p>
                        </div>
                        <div class="col-md-8 col-md-offset-2 mt">
                          <h4>Datos de emergencia</h4>
                          <p>
                            Alergias o enfermedades: {{auth()->user()->alergias_enfermedades}}<br>
                            Tipo de sangre: {{auth()->user()->tipo_sangre}}<br>
                            En caso de accidente avisar a: {{auth()->user()->nombre_emergencia}}<br>
                            Parentesco: {{auth()->user()->parentesco}}<br>
                            Telefono con clave: {{auth()->user()->telefono_emergencia}}<br>
                          </p>
                        </div>
                      </div>
                      <!-- /col-md-6 -->
                    </div>
                    <!-- /row -->
                  </div>
                  <!-- /tab-pane -->
                  <div id="edit" class="tab-pane">
                    <form action="{{ route('update.estudiante', auth()->user()->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                          {!! method_field('PUT')!!}
                          {{ csrf_field() }}

                    <div class="row">
                      <div class="col-lg-8 col-lg-offset-2 detailed">
                        <h4 class="mb">Datos Personales</h4>


                          <div class="form-group">
                            <label class="col-lg-2 control-label"> Avatar</label>
                            <div class="col-lg-6">
                              <input type="file" name="avatar" class="file-pos">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nombre</label>
                            <div class="col-lg-6">
                              <input type="text"  name="name" class="form-control" value="{{ auth()->user()->name}}">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Apellido paterno</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " name="apellido_p" class="form-control" value="{{ auth()->user()->apellido_p}}">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Apellido materno</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " name="apellido_m" class="form-control" value="{{ auth()->user()->apellido_m}}">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Teléfono</label>
                            <div class="col-lg-6">
                                <input type="text" placeholder=" " name="telefono" class="form-control" value="{{ auth()->user()->telefono}}">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Edad</label>
                            <div class="col-lg-6">
                                <input type="text" placeholder=" " name="edad" class="form-control" value="{{ auth()->user()->edad}}">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Pais</label>
                            <div class="col-lg-6">
                                <input type="text" placeholder=" " name="pais" class="form-control" value="{{ auth()->user()->pais}}">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nacionalidad</label>
                            <div class="col-lg-6">
                                <input type="text" placeholder=" " name="nacionalidad" class="form-control" value="{{ auth()->user()->nacionalidad}}">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Estado</label>
                            <div class="col-lg-6">
                                <input type="text" placeholder=" " name="estado" class="form-control" value="{{ auth()->user()->estado}}">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Municipio</label>
                            <div class="col-lg-6">
                                <input type="text" placeholder=" " name="municipio" class="form-control" value="{{ auth()->user()->municipio}}">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Dirección</label>
                            <div class="col-lg-6">
                                <input type="text" placeholder=" " name="calle_num" class="form-control" value="{{ auth()->user()->calle_num}}">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Colonia</label>
                            <div class="col-lg-6">
                                <input type="text" placeholder=" " name="colonia" class="form-control" value="{{ auth()->user()->colonia}}">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Código postal</label>
                            <div class="col-lg-6">
                                <input type="text" placeholder=" " name="cp" class="form-control" value="{{ auth()->user()->cp}}">
                            </div>
                          </div>

                      </div>
                      <div class="col-lg-8 col-lg-offset-2 detailed mt">
                        <h4 class="mb">Datos particulares</h4>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Ultimos estudios</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " name="ult_estudios" class="form-control" value="{{ auth()->user()->ult_estudios}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">institución</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " name="institucion" class="form-control" value="{{ auth()->user()->institucion}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Lugar de trabajo</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " name="lug_trabajo" class="form-control" value="{{ auth()->user()->lug_trabajo}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Puesto</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " name="puesto" class="form-control" value="{{ auth()->user()->puesto}}">
                            </div>
                          </div>



                      </div>
                      <div class="col-lg-8 col-lg-offset-2 detailed mt">
                        <h4 class="mb">Datos de emergencia</h4>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Alergias o enfermedades</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " name="alergias_enfermedades" class="form-control" value="{{ auth()->user()->alergias_enfermedades}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Tipo de sangre</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " name="tipo_sangre" class="form-control" value="{{ auth()->user()->tipo_sangre}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">En caso de accidente avisar a</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " name="nombre_emergencia" class="form-control" value="{{ auth()->user()->nombre_emergencia}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Parentesco</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " name="parentesco" class="form-control" value="{{ auth()->user()->parentesco}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Telefono con clave</label>
                            <div class="col-lg-6">
                              <input type="text" placeholder=" " name="telefono_emergencia" class="form-control" value="{{ auth()->user()->telefono_emergencia}}">
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-theme" type="submit">Guardar</button>
                              {{-- <button class="btn btn-theme04" type="button">Cancelar</button> --}}
                            </div>
                          </div>

                      </div>
                      <!-- /col-lg-8 -->
                    </div>
                    <!-- /row -->
                  </div>
                  </form>
                  <!-- /tab-pane -->
                </div>
                <!-- /tab-content -->
              </div>
              <!-- /panel-body -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
@endsection
