<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = new User;
      $user->name = "Anibal Tomás";
      $user->apellido_p = "Sánchez";
      $user->apellido_m = "Mújica";
      $user->telefono = "8155548";
      $user->edad = "30";
      $user->pais = "México";
      $user->nacionalidad = "Mexicana";
      $user->estado = "Veracruz";
      $user->municipio = "Xalapa";
      $user->calle_num = "brooklin 1";
      $user->colonia = "Aguacatal";
      $user->cp = "91130";
      $user->ult_estudios = "Ingeniería";
      $user->institucion = "Instituto";
      $user->lug_trabajo = "INECOL";
      $user->puesto = "Informática";
      $user->alergias_enfermedades = "No";
      $user->tipo_sangre = "O+";
      $user->nombre_emergencia = "Ines Mújica";
      $user->parentesco = "Madre";
      $user->telefono_emergencia = "8155548";
      $user->email = "anibal.sanchez@inecol.mx";
      $user->password = bcrypt('123456');
      $user->save();
    }
}
