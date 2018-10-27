<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','apellido_p','apellido_m','telefono','edad','pais',
        'nacionalidad','estado','municipio','calle_num','colonia','cp','ult_estudios','institucion',
        'lug_trabajo','puesto','alergias_enfermedades','tipo_sangre','nombre_emergencia','parentesco',
        'telefono_emergencia','identificacion','titulo_cedula','constancia_inst','ingreso_pais','doc_apostillado'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'assigned_cursos');
        // 1 a muchos
    }
}
