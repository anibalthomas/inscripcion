@extends('layouts.principal')

@section('titulo')
Documentos
@endsection
@section('content')
<br>
<div class="chat-room-head">
    <h3>Documentos de inscripción</h3>

</div>
<div class="content-panel">
    <div class="panel-body">
        <form action="{{ route('update', auth()->user()->id) }}" method="post" enctype="multipart/form-data">
            {!! method_field('PUT')!!}
            {{ csrf_field() }}

            <div class="row">
                <div class="form-group">
                    <label class="control-label col-md-3">Copia de la credencial de elector o pasaporte</label>
                    <div class="controls col-md-7">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <span class="btn btn-theme02 btn-file">
                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccionar archivo</span>
                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Cambiar</span>
                                <input type="file" name="identificacion" class="{{ $errors->has('identificacion') ? ' is-invalid' : '' }}">
                            </span>
                            @if ($errors->has('identificacion'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color:red">{{ $errors->first('identificacion') }}</strong>
                            </span>
                            @endif
                            <span class="fileupload-preview" style="margin-left:5px;"></span>
                            <a href="advanced_form_components.html#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                      @if ( null !== (auth()->user()->identificacion))
                        <a href="{{ Storage::url(auth()->user()->identificacion)}}" download>
                          <img src="img/documento.png" alt="W3Schools" width="30px">
                        </a>
                      @endif
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="form-group">
                    <label class="control-label col-md-3">Copia del título o cédula del grado anterior</label>
                    <div class="controls col-md-7">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <span class="btn btn-theme02 btn-file">
                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccionar archivo</span>
                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Cambiar</span>
                                <input type="file" name="titulo_cedula" class="{{ $errors->has('titulo_cedula') ? ' is-invalid' : '' }}">
                            </span>
                            @if ($errors->has('titulo_cedula'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color:red">{{ $errors->first('titulo_cedula') }}</strong>
                            </span>
                            @endif
                            <span class="fileupload-preview" style="margin-left:5px;"></span>
                            <a href="advanced_form_components.html#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                      @if ( null !== (auth()->user()->titulo_cedula))
                        <a href="{{ Storage::url(auth()->user()->titulo_cedula)}}" download>
                          <img src="img/documento.png" alt="W3Schools" width="30px">
                        </a>
                      @endif
                    </div>
                </div>
            </div>
            <hr>
            <div class='row'>
                <div class="form-group">
                    <h4><i class="fa fa-angle-right"></i> Estudiante de otros Posgrados presentar adicionalmente:</h4>
                    <br>
                    <label class="control-label col-md-3">Constancia de la institución indicando si es alumno vigente</label>
                    <div class="controls col-md-7">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <span class="btn btn-theme02 btn-file">
                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccionar archivo</span>
                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Cambiar</span>
                                <input type="file" name="constancia_inst" class="{{ $errors->has('constancia_inst') ? ' is-invalid' : '' }}">
                            </span>
                            @if ($errors->has('constancia_inst'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color:red">{{ $errors->first('constancia_inst') }}</strong>
                            </span>
                            @endif
                            <span class="fileupload-preview" style="margin-left:5px;"></span>
                            <a href="advanced_form_components.html#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                      @if ( null !== (auth()->user()->constancia_inst))
                        <a href="{{ Storage::url(auth()->user()->constancia_inst)}}" download>
                          <img src="img/documento.png" alt="W3Schools" width="30px">
                        </a>
                      @endif
                    </div>
                </div>
            </div>
            <hr>
            <div class='row'>
                <div class="form-group">
                    <h4><i class="fa fa-angle-right"></i> Extranjeros presentar adicionalmente:</h4>
                    <br>
                    <label class="control-label col-md-3">Copia del documento de ingreso al país (formas migratorias vigentes) (sólo en caso de que la estancia sea mayor a un mes)</label>
                    <div class="controls col-md-7">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <span class="btn btn-theme02 btn-file">
                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccionar archivo</span>
                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Cambiar</span>
                                <input type="file" name="ingreso_pais" class="{{ $errors->has('ingreso_pais') ? ' is-invalid' : '' }}">
                            </span>
                            @if ($errors->has('ingreso_pais'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color:red">{{ $errors->first('ingreso_pais') }}</strong>
                            </span>
                            @endif
                            <span class="fileupload-preview" style="margin-left:5px;"></span>
                            <a href="advanced_form_components.html#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                      @if ( null !== (auth()->user()->ingreso_pais))
                        <a href="{{ Storage::url(auth()->user()->ingreso_pais)}}" download>
                          <img src="img/documento.png" alt="W3Schools" width="30px">
                        </a>
                      @endif
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class="form-group">
                    <label class="control-label col-md-3">Copia de documentos apostillados o legalizados, según sea el caso (sólo en caso de que la estancia sea mayor a un mes).</label>
                    <div class="controls col-md-7">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <span class="btn btn-theme02 btn-file">
                                <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccionar archivo</span>
                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Cambiar</span>
                                <input type="file" name="doc_apostillado" class="{{ $errors->has('doc_apostillado') ? ' is-invalid' : '' }}">
                            </span>
                            @if ($errors->has('doc_apostillado'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color:red">{{ $errors->first('doc_apostillado') }}</strong>
                            </span>
                            @endif
                            <span class="fileupload-preview" style="margin-left:5px;"></span>
                            <a href="advanced_form_components.html#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                      @if ( null !== (auth()->user()->doc_apostillado))
                        <a href="{{ Storage::url(auth()->user()->doc_apostillado)}}" download>
                          <img src="img/documento.png" alt="W3Schools" width="30px">
                        </a>
                      @endif
                    </div>
                </div>
            </div>
            <br>
            <div class='form-group'>
                <button type='submit' class='btn btn-primary'>Enviar Documentos</button>
            </div>
        </form>
    </div>
</div>

@foreach (auth()->user()->cursos as $curso)
<form action="{{ route('update.curso', $curso->id) }}" method="post" enctype="multipart/form-data">
    {!! method_field('PUT')!!}
    {{ csrf_field() }}
    <div class="panel-body"></div>
    <div class="chat-room-head">
        <h3>Curso: {{ $curso->nombre}}</h3>
    </div>
    <div class="content-panel">
      <div class="panel-body">
      <div class='row'>
          <div class="form-group">
              <label class="control-label col-md-3">Formato SPA-16. Recibo de pago ( <a target="_blank" href="http://posgrado.inecol.edu.mx/evaluaciones/publico/Cursos/2_Guia_Pago3.pdf">Guía de pago</a>)</label>
              <div class="controls col-md-7">
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                      <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccionar archivo</span>
                          <span class="fileupload-exists"><i class="fa fa-undo"></i> Cambiar</span>
                          <input type="file" name="pago" class="{{ $errors->has('pago') ? ' is-invalid' : '' }}">
                        </span>
                        @if ($errors->has('pago'))
                        <span class="invalid-feedback" role="alert">
                            <strong style="color:red">{{ $errors->first('pago') }}</strong>
                        </span>
                        @endif
                      <span class="fileupload-preview" style="margin-left:5px;"></span>
                      <a href="advanced_form_components.html#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                  </div>
              </div>
              <div class="col-md-2">
                @if ( null !== ($curso->pago))
                  <a href="{{ Storage::url($curso->pago)}}" download>
                    <img src="img/documento.png" alt="W3Schools" width="30px">
                  </a>
                @endif
              </div>
          </div>
      </div>
      <hr>
      <div class='row'>
          <div class="form-group">
            <h4><i class="fa fa-angle-right"></i>Estudiante de otros Posgrados presentar:</h4>
            <br>
              <label class="control-label col-md-3">Carta de respaldo de la institución solicitando exención de pago y/o mencionando el convenio institucional.</label>
              <div class="controls col-md-7">
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                      <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccionar archivo</span>
                          <span class="fileupload-exists"><i class="fa fa-undo"></i> Cambiar</span>
                          <input type="file" name="carta_institucion" class="{{ $errors->has('carta_institucion') ? ' is-invalid' : '' }}">
                        </span>
                        @if ($errors->has('carta_institucion'))
                        <span class="invalid-feedback" role="alert">
                            <strong style="color:red">{{ $errors->first('carta_institucion') }}</strong>
                        </span>
                        @endif
                      <span class="fileupload-preview" style="margin-left:5px;"></span>
                      <a href="advanced_form_components.html#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                  </div>
              </div>
              <div class="col-md-2">
                @if ( null !== ($curso->carta_institucion))
                  <a href="{{ Storage::url($curso->carta_institucion)}}" download>
                    <img src="img/documento.png" alt="W3Schools" width="30px">
                  </a>
                @endif
              </div>
          </div>
      </div>
      <hr>
      <div class='row'>
          <div class="form-group">
            <h4><i class="fa fa-angle-right"></i> Personal o estudiante (Tesistas, servicio social, Estancia, etc.) del INECOL:</h4>
            <br>
              <label class="control-label col-md-3">Copia de la credencial vigente en el INECOL o constancia de estar debidamente registrados en la Secretaría Académica.</label>
              <div class="controls col-md-7">
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                      <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Seleccionar archivo</span>
                          <span class="fileupload-exists"><i class="fa fa-undo"></i> Cambiar</span>
                          <input type="file" name="credencial_inecol" class="{{ $errors->has('credencial_inecol') ? ' is-invalid' : '' }}">
                        </span>
                        @if ($errors->has('credencial_inecol'))
                        <span class="invalid-feedback" role="alert">
                            <strong style="color:red">{{ $errors->first('credencial_inecol') }}</strong>
                        </span>
                        @endif
                      <span class="fileupload-preview" style="margin-left:5px;"></span>
                      <a href="advanced_form_components.html#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                  </div>
              </div>
              <div class="col-md-2">
                @if ( null !== ($curso->credencial_inecol))
                  <a href="{{ Storage::url($curso->credencial_inecol)}}" download>
                    <img src="img/documento.png" alt="W3Schools" width="30px">
                  </a>
                @endif
              </div>
          </div>
      </div>
      <br>
      <div class='form-group'>
          <button type='submit' class='btn btn-primary'>Enviar documento</button>
      </div>

    </div>
</div>
</form>
@endforeach
{{-- <br>
    <div class="chat-room-head">
        <h3>Documentos de inscripción</h3>

    </div> --}}


@endsection
@push('script')
<script type="text/javascript" src="/front/lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
@endpush
@push('style')
<link rel="stylesheet" type="text/css" href="/front/lib/bootstrap-fileupload/bootstrap-fileupload.css" />
@endpush
