<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;
use App\Escolaridad;
use App\Estatus_social;
use App\Ocupacion;
use App\Orden_Estatus;
use App\Tipo_sangre;

class UsersTableSeeder extends Seeder
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
          'escolaridad' => 'Desconocido',
          'descripcion' => '------------',
          'user_id' => 1,
        ]);
        Escolaridad::create([
          'escolaridad' => 'Primaria',
          'descripcion' => 'Educación básica',
          'user_id' => 1,
        ]);
        Escolaridad::create([
          'escolaridad' => 'Secundaria',
          'descripcion' => 'Educación básica',
          'user_id' => 1,
        ]);
        Escolaridad::create([
          'escolaridad' => 'Bachillerato',
          'descripcion' => 'Educación media superior',
          'user_id' => 1,
        ]);
        Escolaridad::create([
          'escolaridad' => 'Licenciatura',
          'descripcion' => 'Superior',
          'user_id' => 1,
        ]);
        Escolaridad::create([
          'escolaridad' => 'Maestría',
          'descripcion' => 'Posgrados y especialización',
          'user_id' => 1,
        ]);
        Escolaridad::create([
          'escolaridad' => 'Doctorado',
          'descripcion' => 'Máximo nivel académico',
          'user_id' => 1,
        ]);

// Estatus_social
        Estatus_social::create([
          'estatus' => 'Desconocido',
          'descripcion' => '------------',
          'user_id' => 1,
        ]);    
        Estatus_social::create([
          'estatus' => 'Soltero',
          'descripcion' => 'Libre y sin compromisos',
          'user_id' => 1,
        ]);
        Estatus_social::create([
          'estatus' => 'Casado',
          'descripcion' => 'Com papel firmado y compromiso conyugal',
          'user_id' => 1,
        ]);

        Estatus_social::create([
          'estatus' => 'Divorsiado',
          'descripcion' => 'descripción',
          'user_id' => 1,
        ]);
        Estatus_social::create([
          'estatus' => 'Viudo',
          'descripcion' => 'descripción',
          'user_id' => 1,
        ]);
      Estatus_social::create([
          'estatus' => 'Unión libre',
          'descripcion' => 'descripción',
          'user_id' => 1,
        ]);
          
// Ocupacion
        Ocupacion::create([
          'ocupacion' => 'Desconocido',
          'descripcion' => '-------------',
          'user_id' => 1,
        ]);
        Ocupacion::create([
          'ocupacion' => 'Estudiante',
          'descripcion' => 'descripción',
          'user_id' => 1,
        ]);
        Ocupacion::create([
          'ocupacion' => 'Maestro de asignatura',
          'descripcion' => 'descripción',
          'user_id' => 1,
        ]);
        Ocupacion::create([
          'ocupacion' => 'Maestro de tiempo completo',
          'descripcion' => 'descripción',
          'user_id' => 1,
        ]);
        Ocupacion::create([
          'ocupacion' => 'Proveedor externo',
          'descripcion' => 'descripción',
          'user_id' => 1,
        ]);
        Ocupacion::create([
          'ocupacion' => 'Administrativo',
          'descripcion' => 'descripción',
          'user_id' => 1,
        ]);
        Ocupacion::create([
          'ocupacion' => 'Mantenimiento',
          'descripcion' => 'descripción',
          'user_id' => 1,
        ]);
        Ocupacion::create([
          'ocupacion' => 'Otra',
          'descripcion' => 'descripción',
          'user_id' => 1,
        ]);

// // Orden_Estatus
//         Orden_Estatus::create([
//           'estatus' => 'Solicitada',
//           'descripcion' => 'se hizo la petición',
//           'user_id' => 1,
//         ]);
//         Orden_Estatus::create([
//           'estatus' => 'Preparada',
//           'descripcion' => 'ya fue preparada, puede pasar a recoger',
//           'user_id' => 1,
//         ]);
//         Orden_Estatus::create([
//           'estatus' => 'Entregada',
//           'descripcion' => 'Ya se entregó al cliente',
//           'user_id' => 1,
//         ]);
//         Orden_Estatus::create([
//           'estatus' => 'Cancelada',
//           'descripcion' => 'Se canceló la orden',
//           'user_id' => 1,
//         ]);
        
// Tipo_sangre 
        Tipo_sangre::create([
          'tipo_sangre' => 'Desconocido',
          'user_id' => 1,
        ]);  
        Tipo_sangre::create([
          'tipo_sangre' => 'O negativo',
          'user_id' => 1,
        ]);
        Tipo_sangre::create([
          'tipo_sangre' => 'O positivo ',
          'user_id' => 1,
        ]);
        Tipo_sangre::create([
          'tipo_sangre' => 'A negativo',
          'user_id' => 1,
        ]);
        Tipo_sangre::create([
          'tipo_sangre' => 'A positivo',
          'user_id' => 1,
        ]);
        Tipo_sangre::create([
          'tipo_sangre' => 'B negativo',
          'user_id' => 1,
        ]);
                
        Tipo_sangre::create([
          'tipo_sangre' => 'B positivo',
          'user_id' => 1,
        ]);
        Tipo_sangre::create([
          'tipo_sangre' => 'AB negativo',
          'user_id' => 1,
        ]);
        Tipo_sangre::create([
          'tipo_sangre' => 'AB negativo',
          'user_id' => 1,
        ]);
      
  //roles
        $acceso=Role::create([
            'name'=>'Administrador',
            'slug'=>'admin',
            'description'=> 'Acceso total',
            'special'=>'all-access'
        ]);

        $sinAcceso=Role::create([
            'name'=>'Desabilitado',
            'slug'=>'desabilitado',
            'description'=> 'Sin acceso a ningún módulo',
            'special'=>'no-access'
        ]);

//users
        $user = [
          '1' =>    User::create(['name'  => 'Grey Valle', 'password' => bcrypt('secret'), 'email' => 'greygarcia14.gg@gmail.com','escolaridad_id'=>4,'estatus_social_id'=>2,'ocupacion_id'=>1,'tipo_sangre_id'=>3]),
          '2' =>     User::create(['name'  => 'Aldo Sánchez', 'password' => bcrypt('secret'), 'email' => '150050112@upve.edu.mx','escolaridad_id'=>4,'estatus_social_id'=>2,'ocupacion_id'=>1,'tipo_sangre_id'=>3]),
          '3' =>    User::create(['name'  => 'Francisco Mascorro', 'password' => bcrypt('secret'), 'email' => '150050037@upve.edu.mx','escolaridad_id'=>4,'estatus_social_id'=>2,'ocupacion_id'=>1,'tipo_sangre_id'=>3]),
          '4' =>     User::create(['name'  => 'José Verdugo', 'password' => bcrypt('secret'), 'email' => 'jose@gmail.com','escolaridad_id'=>4,'estatus_social_id'=>2,'ocupacion_id'=>1,'tipo_sangre_id'=>3]),
          '5' => User::create([ 'name'  => 'Carolina Bueno', 'password' => bcrypt('secret'), 'email' => 'bueno@gmail.com','escolaridad_id'=>4,'estatus_social_id'=>2,'ocupacion_id'=>1,'tipo_sangre_id'=>3]),
          '6' => User::create([ 'name'  => 'Geneby Magdela García', 'password' => bcrypt('secret'), 'email' => '150050120@upve.edu.mx','escolaridad_id'=>4,'estatus_social_id'=>2,'ocupacion_id'=>1,'tipo_sangre_id'=>3]),
        ];
//roles a users
        $user['1']->roles()->attach($acceso);
        $user['2']->roles()->attach($sinAcceso);
        $user['3']->roles()->attach($sinAcceso);
        $user['4']->roles()->attach($sinAcceso);
        $user['5']->roles()->attach($sinAcceso);
        $user['6']->roles()->attach($sinAcceso);

    	factory(App\User::class,20)->create();

      // Orden_Estatus
        Orden_Estatus::create([
          'estatus' => 'Solicitada',
          'descripcion' => 'se hizo la petición',
          'user_id' => 1,
        ]);
        Orden_Estatus::create([
          'estatus' => 'Preparada',
          'descripcion' => 'ya fue preparada, puede pasar a recoger',
          'user_id' => 1,
        ]);
        Orden_Estatus::create([
          'estatus' => 'Entregada',
          'descripcion' => 'Ya se entregó al cliente',
          'user_id' => 1,
        ]);
        Orden_Estatus::create([
          'estatus' => 'Cancelada',
          'descripcion' => 'Se canceló la orden',
          'user_id' => 1,
        ]);
    }
}
