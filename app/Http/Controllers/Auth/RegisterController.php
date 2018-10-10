<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'apellido_p' => 'required|string|max:255',
            'apellido_m' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'edad' => 'required|string|max:255',
            'pais' => 'required|string|max:255',
            'nacionalidad' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'municipio' => 'required|string|max:255',
            'calle_num' => 'required|string|max:255',
            'colonia' => 'required|string|max:255',
            'cp' => 'required|string|max:255',
            'ult_estudios' => 'required|string|max:255',
            'institucion' => 'required|string|max:255',
            'lug_trabajo' => 'required|string|max:255',
            'puesto' => 'required|string|max:255',
            'alergias_enfermedades' => 'required|string|max:255',
            'tipo_sangre' => 'required|string|max:255',
            'nombre_emergencia' => 'required|string|max:255',
            'parentesco' => 'required|string|max:255',
            'telefono_emergencia' => 'required|string|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'apellido_p' => $data['apellido_p'],
            'apellido_m' => $data['apellido_m'],
            'telefono' => $data['telefono'],
            'edad' => $data['edad'],
            'pais' => $data['pais'],
            'nacionalidad' => $data['nacionalidad'],
            'estado' => $data['estado'],
            'municipio' => $data['municipio'],
            'calle_num' => $data['calle_num'],
            'colonia' => $data['colonia'],
            'cp' => $data['cp'],
            'ult_estudios' => $data['ult_estudios'],
            'institucion' => $data['institucion'],
            'lug_trabajo' => $data['lug_trabajo'],
            'puesto' => $data['puesto'],
            'alergias_enfermedades' => $data['alergias_enfermedades'],
            'tipo_sangre' => $data['tipo_sangre'],
            'nombre_emergencia' => $data['nombre_emergencia'],
            'parentesco' => $data['parentesco'],
            'telefono_emergencia' => $data['telefono_emergencia'],
        ]);
    }
}
