@extends('layouts.app')

@section('content')
<div class="container">
  <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="row
    {{-- justify-content-center --}}
    ">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Datos personales') }}</div>

                <div class="card-body">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Paterno') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('apellido_p') ? ' is-invalid' : '' }}" name="apellido_p" value="{{ old('apellido_p') }}" required autofocus>

                                @if ($errors->has('apellido_p'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('apellido_p') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Materno') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('apellido_m') ? ' is-invalid' : '' }}" name="apellido_m" value="{{ old('apellido_m') }}" required autofocus>

                                @if ($errors->has('apellido_m'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('apellido_m') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}" required autofocus>

                                @if ($errors->has('telefono'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('telefono') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="edad" class="col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>

                            <div class="col-md-6">
                                <input id="edad" type="text" class="form-control{{ $errors->has('edad') ? ' is-invalid' : '' }}" name="edad" value="{{ old('edad') }}" required>

                                @if ($errors->has('edad'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('edad') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pais" class="col-md-4 col-form-label text-md-right">{{ __('País') }}</label>

                            <div class="col-md-6">
                                <input id="pais" type="text" class="form-control{{ $errors->has('pais') ? ' is-invalid' : '' }}" name="pais" value="{{ old('pais') }}" required>

                                @if ($errors->has('pais'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('pais') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nacionalidad" class="col-md-4 col-form-label text-md-right">{{ __('Nacionalidad') }}</label>

                            <div class="col-md-6">
                                <input id="nacionalidad" type="text" class="form-control{{ $errors->has('nacionalidad') ? ' is-invalid' : '' }}" name="nacionalidad" value="{{ old('nacionalidad') }}" required>

                                @if ($errors->has('nacionalidad'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nacionalidad') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

                            <div class="col-md-6">
                                <input id="estado" type="text" class="form-control{{ $errors->has('estado') ? ' is-invalid' : '' }}" name="estado" value="{{ old('estado') }}" required>

                                @if ($errors->has('estado'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('estado') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="municipio" class="col-md-4 col-form-label text-md-right">{{ __('Municipio') }}</label>

                            <div class="col-md-6">
                                <input id="municipio" type="text" class="form-control{{ $errors->has('municipio') ? ' is-invalid' : '' }}" name="municipio" value="{{ old('municipio') }}" required>

                                @if ($errors->has('municipio'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('municipio') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="calle_num" class="col-md-4 col-form-label text-md-right">{{ __('Calle y Numero') }}</label>

                            <div class="col-md-6">
                                <input id="calle_num" type="text" class="form-control{{ $errors->has('calle_num') ? ' is-invalid' : '' }}" name="calle_num" value="{{ old('calle_num') }}" required>

                                @if ($errors->has('calle_num'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('calle_num') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="colonia" class="col-md-4 col-form-label text-md-right">{{ __('Colonia') }}</label>

                            <div class="col-md-6">
                                <input id="colonia" type="text" class="form-control{{ $errors->has('colonia') ? ' is-invalid' : '' }}" name="colonia" value="{{ old('colonia') }}" required>

                                @if ($errors->has('colonia'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('colonia') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cp" class="col-md-4 col-form-label text-md-right">{{ __('Código postal') }}</label>

                            <div class="col-md-6">
                                <input id="cp" type="text" class="form-control{{ $errors->has('cp') ? ' is-invalid' : '' }}" name="cp" value="{{ old('cp') }}" required>

                                @if ($errors->has('cp'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('cp') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Datos particulares y emergencia') }}</div>

                <div class="card-body">
                  <div class="form-group row">
                      <label for="ult_estudios" class="col-md-4 col-form-label text-md-right">{{ __('Ultimos estudios') }}</label>

                      <div class="col-md-6">
                          <input id="ult_estudios" type="text" class="form-control{{ $errors->has('ult_estudios') ? ' is-invalid' : '' }}" name="ult_estudios" value="{{ old('ult_estudios') }}" required>

                          @if ($errors->has('ult_estudios'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('ult_estudios') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="institucion" class="col-md-4 col-form-label text-md-right">{{ __('institución') }}</label>

                      <div class="col-md-6">
                          <input id="institucion" type="text" class="form-control{{ $errors->has('institucion') ? ' is-invalid' : '' }}" name="institucion" value="{{ old('institucion') }}" required>

                          @if ($errors->has('institucion'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('institucion') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="lug_trabajo" class="col-md-4 col-form-label text-md-right">{{ __('Lugar de trabajo') }}</label>

                      <div class="col-md-6">
                          <input id="lug_trabajo" type="text" class="form-control{{ $errors->has('lug_trabajo') ? ' is-invalid' : '' }}" name="lug_trabajo" value="{{ old('lug_trabajo') }}" required>

                          @if ($errors->has('lug_trabajo'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('lug_trabajo') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="puesto" class="col-md-4 col-form-label text-md-right">{{ __('Puesto') }}</label>

                      <div class="col-md-6">
                          <input id="puesto" type="text" class="form-control{{ $errors->has('puesto') ? ' is-invalid' : '' }}" name="puesto" value="{{ old('puesto') }}" required>

                          @if ($errors->has('puesto'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('puesto') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="alergias_enfermedades" class="col-md-4 col-form-label text-md-right">{{ __('Alergias o enfermedades') }}</label>

                      <div class="col-md-6">
                          <input id="alergias_enfermedades" type="text" class="form-control{{ $errors->has('alergias_enfermedades') ? ' is-invalid' : '' }}" name="alergias_enfermedades" value="{{ old('alergias_enfermedades') }}" required>

                          @if ($errors->has('alergias_enfermedades'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('alergias_enfermedades') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="tipo_sangre" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de sangre') }}</label>

                      <div class="col-md-6">
                          <input id="tipo_sangre" type="text" class="form-control{{ $errors->has('tipo_sangre') ? ' is-invalid' : '' }}" name="tipo_sangre" value="{{ old('tipo_sangre') }}" required>

                          @if ($errors->has('tipo_sangre'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('tipo_sangre') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="nombre_emergencia" class="col-md-4 col-form-label text-md-right">{{ __('En caso de accidente avisar a:') }}</label>

                      <div class="col-md-6">
                          <input id="nombre_emergencia" type="text" class="form-control{{ $errors->has('nombre_emergencia') ? ' is-invalid' : '' }}" name="nombre_emergencia" value="{{ old('nombre_emergencia') }}" required>

                          @if ($errors->has('nombre_emergencia'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('nombre_emergencia') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="parentesco" class="col-md-4 col-form-label text-md-right">{{ __('Parentesco') }}</label>

                      <div class="col-md-6">
                          <input id="parentesco" type="text" class="form-control{{ $errors->has('parentesco') ? ' is-invalid' : '' }}" name="parentesco" value="{{ old('parentesco') }}" required>

                          @if ($errors->has('parentesco'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('parentesco') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="telefono_emergencia" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono de emergencia') }}</label>

                      <div class="col-md-6">
                          <input id="telefono_emergencia" type="text" class="form-control{{ $errors->has('telefono_emergencia') ? ' is-invalid' : '' }}" name="telefono_emergencia" value="{{ old('telefono_emergencia') }}" required>

                          @if ($errors->has('telefono_emergencia'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('telefono_emergencia') }}</strong>
                          </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Registrar') }}
                          </button>
                      </div>
                  </div>

                </div>
            </div>
        </div>
    </div>

  </form>
</div>
@endsection
