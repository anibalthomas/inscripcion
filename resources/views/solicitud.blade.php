@extends('layouts.principal')

@section('content')
    <h3><i class="fa fa-angle-right"></i>Solicitud de curso</h3>
  <div class="content-panel">
  <div class="panel-body">

    <form class="form-horizontal" method="POST" action="{{route('guardar')}}">
      {{ csrf_field() }}

      <div class="form-group">
        <label class="col-sm-2 col-sm-2 control-label">Nombre de Curso</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nombre" value="" required autofocus>
        </div>
      </div>

      <div class="form-group ">
        <label  class="col-sm-2 col-sm-2 control-label">Motivos por los que desea tomar el curso</label>
        <div class="col-sm-10">
          <textarea class="form-control" rows="5" cols="77" name="motivos" required></textarea>
        </div>
      </div>

      <div class="form-group ">
        <div class="col-sm-12">
          <input type="checkbox" class="col-sm-2 col-sm-2 control-label" name="acuerdo" required>
          <label for="agree" class="col-lg-10 col-sm-10">Acataré las obligraciones y derechos indicados en el <a target="_blank" href="http://normateca.inecol.edu.mx/normateca/documentos/0311.pdf">Manual de Operación</a> de la Secretaría de Posgrado</label>
        </div>
      </div>

        <div class="form-actions">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>

  </div>
</div>
@endsection
