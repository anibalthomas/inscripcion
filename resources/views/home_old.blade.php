@extends('layouts.principal')

@section('content')
<div class="main">
    <div class="main-inner">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <div class="widget widget-nopad">
                        <div class="widget-header"> <i class="icon-list-alt"></i>
                            <h3>Cursos Inscritos</h3>
                        </div>
                        <div class="widget-content">
                            <div class="widget big-stats-container">
                              @foreach (auth()->user()->cursos as $curso)
                              <p>{{ $curso->nombre}}</p>
                              @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-header"> <i class="icon-file"></i>
                            <h3> Datos Personales</h3>
                        </div>
                        <div class="widget-content">
                          {{auth()->user()->name}}<br>
                          {{auth()->user()->apellido_p}}<br>
                          {{auth()->user()->apellido_m}}<br>
                          {{auth()->user()->telefono}}<br>
                          {{auth()->user()->edad}}<br>
                          {{auth()->user()->pais}}<br>
                          {{auth()->user()->nacionalidad}}<br>
                          {{auth()->user()->estado}}<br>
                          {{auth()->user()->municipio}}<br>
                          {{auth()->user()->calle_num}}<br>
                          {{auth()->user()->colonia}}<br>
                          {{auth()->user()->cp}}<br>
                        </div>
                    </div>
                </div>
                <div class="span6">
                    <div class="widget">
                        <div class="widget-header"> <i class="icon-bookmark"></i>
                            <h3>Datos curriculares</h3>
                        </div>
                        <div class="widget-content">
                          {{auth()->user()->ult_estudios}}<br>
                          {{auth()->user()->institucion}}<br>
                          {{auth()->user()->lug_trabajo}}<br>
                          {{auth()->user()->puesto}}<br>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget-header"> <i class="icon-signal"></i>
                            <h3>Datos de emergencia</h3>
                        </div>
                        <div class="widget-content">
                          {{auth()->user()->alergias_enfermedades}}<br>
                          {{auth()->user()->tipo_sangre}}<br>
                          {{auth()->user()->nombre_emergencia}}<br>
                          {{auth()->user()->parentesco}}<br>
                          {{auth()->user()->telefono_emergencia}}<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
  style="background-color: black; position: absolute;  bottom: 0;  width: 100%;  height: 40px;  color: white;"
@endsection
