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
                            </div>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-header"> <i class="icon-file"></i>
                            <h3> Datos Personales</h3>
                        </div>
                        <div class="widget-content">
                        </div>
                    </div>
                </div>
                <div class="span6">
                    <div class="widget">
                        <div class="widget-header"> <i class="icon-bookmark"></i>
                            <h3>Datos curriculares</h3>
                        </div>
                        <div class="widget-content">
                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget-header"> <i class="icon-signal"></i>
                            <h3>Datos de emergencia</h3>
                        </div>
                        <div class="widget-content">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
