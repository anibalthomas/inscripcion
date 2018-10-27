@extends('layouts.principal')

@section('content')
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="widget ">
          <div class="widget-header">
            <i class="icon-user"></i>
            <h3>Solicitud de curso</h3>
          </div> <!-- /widget-header -->
          <div class="widget-content">
                  <form class="form-horizontal" method="POST" action="{{route('guardar')}}">
                    {{ csrf_field() }}
                      <div class="control-group">
                        <label class="control-label" for="username">Nombre de Curso</label>
                        <div class="controls">
                          <input name="nombre" type="text" class="span6 disabled" value="" required autofocus>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="firstname">Motivos por los que desea tomar el curso</label>
                        <div class="controls">
                          <textarea name="motivos" class="span6" rows="5" cols="77" style="height: auto; width:auto" required></textarea>
                        </div>
                      </div>
                      <div class="control-group">
                        <div class="controls">
                          <label class="checkbox inline">
                            <input type="checkbox" name="acuerdo" value="ok" required> Acataré las obligraciones y derechos indicados en el Manual de Operación de la Secretaría de Posgrado
                          </label>
                        </div>
                      </div>
                      <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                      </div>
                  </form>

          </div> <!-- /widget-content -->
        </div> <!-- /widget -->
      </div> <!-- /span8 -->
    </div> <!-- /row -->
  </div> <!-- /container -->
@endsection
@section('footer')
  style="background-color: black; position: absolute;  bottom: 0;  width: 100%;  height: 40px;  color: white;"
@endsection
