<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
  protected $fillable = [
      'nombre', 'motivos', 'acuerdo','pago','carta_institucion','credencial_inecol'
  ];
}
