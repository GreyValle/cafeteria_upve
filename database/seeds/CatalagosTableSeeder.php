<?php

use Illuminate\Database\Seeder;
use App\Escolaridad;
use App\Estatus_social;
use App\Ocupacion;
use App\Orden_Estatus;
use App\Tipo_sangre;

class CatalagosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// Escolaridad
        Escolaridad::create([
        	'escolaridad' => 'Primaria',
        	'descripcion' => 'Educación básica',
        	'user_id' => 21,
        ]);
        Escolaridad::create([
        	'escolaridad' => 'Secundaria',
        	'descripcion' => 'Educación básica',
        	'user_id' => 21,
        ]);
        Escolaridad::create([
        	'escolaridad' => 'Bachillerato',
        	'descripcion' => 'Educación media superior',
        	'user_id' => 21,
        ]);
        Escolaridad::create([
        	'escolaridad' => 'Licenciatura',
        	'descripcion' => 'Superior',
        	'user_id' => 21,
        ]);
        Escolaridad::create([
        	'escolaridad' => 'Maestría',
        	'descripcion' => 'Posgrados y especialización',
        	'user_id' => 21,
        ]);
        Escolaridad::create([
        	'escolaridad' => 'Doctorado',
        	'descripcion' => 'Máximo nivel académico',
        	'user_id' => 21,
        ]);
        
// Estatus_social
        Estatus_social::create([
        	'estatus' => 'Soltero',
        	'descripcion' => 'Libre y sin compromisos',
        	'user_id' => 21,
        ]);
        Estatus_social::create([
        	'estatus' => 'Casado',
        	'descripcion' => 'Com papel firmado y compromiso conyugal',
        	'user_id' => 21,
        ]);

        Estatus_social::create([
        	'estatus' => 'Divorsiado',
        	'descripcion' => 'descripción',
        	'user_id' => 21,
        ]);
		Estatus_social::create([
        	'estatus' => 'Viudo',
        	'descripcion' => 'descripción',
        	'user_id' => 21,
        ]);
   		Estatus_social::create([
        	'estatus' => 'Unión libre',
        	'descripcion' => 'descripción',
        	'user_id' => 21,
        ]);
        
// Ocupacion
        Ocupacion::create([
        	'ocupacion' => 'Estudiante',
        	'descripcion' => 'descripción',
        	'user_id' => 21,
        ]);
        Ocupacion::create([
        	'ocupacion' => 'Maestro de asignatura',
        	'descripcion' => 'descripción',
        	'user_id' => 21,
        ]);
        Ocupacion::create([
        	'ocupacion' => 'Maestro de tiempo completo',
        	'descripcion' => 'descripción',
        	'user_id' => 21,
        ]);
        Ocupacion::create([
        	'ocupacion' => 'Proveedor externo',
        	'descripcion' => 'descripción',
        	'user_id' => 21,
        ]);
        Ocupacion::create([
        	'ocupacion' => 'Administrativo',
        	'descripcion' => 'descripción',
        	'user_id' => 21,
        ]);
        Ocupacion::create([
        	'ocupacion' => 'Mantenimiento',
        	'descripcion' => 'descripción',
        	'user_id' => 21,
        ]);
        Ocupacion::create([
        	'ocupacion' => 'Otra',
        	'descripcion' => 'descripción',
        	'user_id' => 21,
        ]);

// Orden_Estatus
        Orden_Estatus::create([
        	'estatus' => 'Solicitada',
        	'descripcion' => 'se hizo la petición',
        	'user_id' => 21,
        ]);
        Orden_Estatus::create([
        	'estatus' => 'Preparada',
        	'descripcion' => 'ya fue preparada, puede pasar a recoger',
        	'user_id' => 21,
        ]);
        Orden_Estatus::create([
        	'estatus' => 'Entregada',
        	'descripcion' => 'Ya se entregó al cliente',
        	'user_id' => 21,
        ]);
        Orden_Estatus::create([
        	'estatus' => 'Cancelada',
        	'descripcion' => 'Se canceló la orden',
        	'user_id' => 21,
        ]);
// Tipo_sangre Orden_Estatus
        Tipo_sangre::create([
        	'tipo_sangre' => 'O negativo',
        	'user_id' => 21,
        ]);
        Tipo_sangre::create([
        	'tipo_sangre' => 'O positivo ',
        	'user_id' => 21,
        ]);
        Tipo_sangre::create([
        	'tipo_sangre' => 'A negativo',
        	'user_id' => 21,
        ]);
        Tipo_sangre::create([
        	'tipo_sangre' => 'A positivo',
        	'user_id' => 21,
        ]);
        Tipo_sangre::create([
        	'tipo_sangre' => 'B negativo',
        	'user_id' => 21,
        ]);
                
        Tipo_sangre::create([
        	'tipo_sangre' => 'B positivo',
        	'user_id' => 21,
        ]);
        Tipo_sangre::create([
        	'tipo_sangre' => 'AB negativo',
        	'user_id' => 21,
        ]);
        Tipo_sangre::create([
        	'tipo_sangre' => 'AB negativo',
        	'user_id' => 21,
        ]);

    }
}
