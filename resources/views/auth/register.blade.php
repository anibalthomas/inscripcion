@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row
    {{-- justify-content-center --}}
    ">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Datos personales') }}</div>

                <div class="card-body">

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

                </div>
            </div>
        </div>
    </div>
<div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">{{ __('Datos particulares') }}</div>
            <div class="card-body">
              <div class="form-group row">
                  <label for="colonia" class="col-md-4 col-form-label text-md-right">{{ __('Ultimos estudios') }}</label>

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

            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card">
            <div class="card-header">{{ __('Datos de emergencia') }}</div>
            <div class="card-body">

            </div>
          </div>
        </div>

</div>


</div>
@endsection
