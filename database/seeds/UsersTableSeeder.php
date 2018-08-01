<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
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
    	factory(App\User::class,20)->create();

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


        $user = [
          'admin' =>    User::create(['name'  => 'Grey Valle', 'password' => bcrypt('secret'), 'email' => 'grey@admin.com']),
          'observador' =>     User::create(['name'  => 'Carolina Salazar', 'password' => bcrypt('secret'), 'email' => 'salazar@gmail.com']),
          'usuarios' =>    User::create(['name'  => 'Javier Beltrán', 'password' => bcrypt('secret'), 'email' => 'javier@gmail.com']),
          'supervisor' =>     User::create(['name'  => 'José Verdugo', 'password' => bcrypt('secret'), 'email' => 'jose@gmail.com']),
          'desabilitado' => User::create([ 'name'  => 'Carolina Bueno', 'password' => bcrypt('secret'), 'email' => 'bueno@gmail.com']),
        ];

        $user['admin']->roles()->attach($acceso);
        $user['observador']->roles()->attach($sinAcceso);
        $user['usuarios']->roles()->attach($sinAcceso);
        $user['supervisor']->roles()->attach($sinAcceso);
        $user['desabilitado']->roles()->attach($sinAcceso);

    }
}
