@extends('layouts.principal')

@section('content')

<div class="container">

  <form action="{{ route('update', auth()->user()->id) }}" method="post" enctype="multipart/form-data">
        {!! method_field('PUT')!!}
        {{ csrf_field() }}

        <div class="row">
            <div class="span12">
                <div class="widget ">
                    <div class="widget-header">
                        <i class="icon-user"></i>
                        <h3>Documentos</h3>
                    </div>
                    <div class="widget-content">

                        <div class='form-group'>

                            {{-- <img width="100px" src="{{ Storage::url(auth()->user()->identificacion)}}" alt=""> --}}
                            <label for='name-id'>Copia de la credencial de elector o pasaporte</label>
                            <p><label for="identificacion">
                                    <input type="file" name="identificacion" class="{{ $errors->has('identificacion') ? ' is-invalid' : '' }}">
                                    @if ($errors->has('identificacion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $errors->first('identificacion') }}</strong>
                                    </span>
                                    @endif
                            </p>
                        </div>

                        <div class='form-group'>
                            <label for='name-id'>Copia del título o cédula del grado anterior</label>
                            <p><label for="titulo_cedula">
                                    <input type="file" name="titulo_cedula" value="">
                            </p>
                        </div>

                        <hr>
                        <div class='form-group'>
                            <h3>En caso de ser estudiante de otros Posgrados presentar adicionalmente:</h3> <br>
                            <label for='name-id'>Constancia de la institución indicando si es alumno vigente</label>
                            <p><label for="constancia_inst">
                                    <input type="file" name="constancia_inst" value="">
                            </p>
                        </div>


                        <hr>

                        <div class='form-group'>
                            <h3>En caso de ser extranjeros presentar adicionalmente:</h3> <br>
                            <label for='name-id'>Copia del documento de ingreso al país (formas migratorias vigentes) (sólo en caso de que la estancia sea mayor a un mes)</label>
                            <p><label for="ingreso_pais">
                                    <input type="file" name="ingreso_pais" value="">
                            </p>
                        </div>

                        <div class='form-group'>
                            <label for='name-id'>Copia de documentos apostillados o legalizados, según sea el caso (sólo en caso de que la estancia sea mayor a un mes).</label>
                            <p><label for="doc_apostillado">
                                    <input type="file" name="doc_apostillado" value="">
                            </p>
                        </div>
                        <div class='form-group'>
                            <button type='submit' class='btn btn-primary'>guardar</button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </form>

    @foreach (auth()->user()->cursos as $curso)
    <form action="{{ route('update.curso', $curso->id) }}" method="post" enctype="multipart/form-data">
      {!! method_field('PUT')!!}
      {{ csrf_field() }}
        <div class="widget ">
            <div class="widget-header">
                <i class="icon-user"></i>
                <h3>{{ $curso->nombre}}</h3>
            </div>
            <div class="widget-content">
                <div class='form-group'>
                    <label for='name-id'>Formato SPA-16. Recibo de pago (ver Guía de pago)</label>
                    <p><label for="pago">
                            <input type="file" name="pago" value="">
                    </p>
                </div>

                <hr>
                <div class='form-group'>
                    <h3>En caso de ser estudiante de otros Posgrados presentar </h3> <br>
                    <label for='name-id'>carta de respaldo de la institución solicitando exención de pago y/o mencionando el convenio institucional.</label>
                    <p><label for="carta_institucion">
                            <input type="file" name="carta_institucion" value="">
                    </p>
                </div>

                <hr>
                <div class='form-group'>
                    <h3>En caso de ser personal o estudiante (Tesistas, servicio social, Estancia, etc.) del INECOL </h3> <br>
                    <label for='name-id'>Copia de la credencial vigente en el INECOL o constancia de estar debidamente registrados en la Secretaría Académica.</label>
                    <p><label for="credencial_inecol">
                            <input type="file" name="credencial_inecol" value="">
                    </p>
                </div>
                <div class='form-group'>
                    <button type='submit' class='btn btn-primary'>guardar</button>
                </div>
            </div>
        </div>

    </form>
    @endforeach



</div>
@endsection
