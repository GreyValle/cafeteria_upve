<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //users users.update_asignar_roles
        Permission::create([
            'name' => 'Actualizar saldo',
            'slug' => 'users.update_saldo',
            'description' => 'Puede actualizar el saldo a los usuarios',
        ]); 
        Permission::create([
            'name' => 'Asignar roles',
            'slug' => 'users.asignar_roles',
            'description' => 'Puede asignar roles a los usuarios',
        ]);
        Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'users.index',
            'description' => 'Lista y Navega todos los usuarios del sistema',
        ]);
        Permission::create([
        	'name' => 'Ver detalle de usuario',
        	'slug' => 'users.show',
        	'description' => 'Ver en detalle cada ususario del sistema',
        ]);
        Permission::create([
        	'name' => 'Edición de usuario',
        	'slug' => 'users.edit',
        	'description' => 'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
        	'name' => 'Eliminar usuario',
        	'slug' => 'users.destroy',
        	'description' => 'Eliminar cualquier usuario del sistema',
        ]);

         //roles
        Permission::create([
        	'name' => 'Navegar roles',
        	'slug' => 'roles.index',
        	'description' => 'Lista y Navega todos los roles del sistema',
        ]);
        Permission::create([
        	'name' => 'Ver detalle de rol',
        	'slug' => 'roles.show',
        	'description' => 'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
        	'name' => 'Creación de roles',
        	'slug' => 'roles.create',
        	'description' => 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
        	'name' => 'Edición de roles',
        	'slug' => 'roles.edit',
        	'description' => 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
        	'name' => 'Eliminar rol',
        	'slug' => 'roles.destroy',
        	'description' => 'Eliminar cualquier rol del sistema',
        ]);
        
        //products
        Permission::create([
        	'name' => 'Navegar productos',
        	'slug' => 'products.index',
        	'description' => 'Lista y Navega todos los productos del sistema',
        ]);
        Permission::create([
        	'name' => 'Ver detalle de producto',
        	'slug' => 'products.show',
        	'description' => 'Ver en detalle cada producto del sistema',
        ]);
        Permission::create([
        	'name' => 'Creación de productos',
        	'slug' => 'products.create',
        	'description' => 'Editar cualquier dato de un producto del sistema',
        ]);
        Permission::create([
        	'name' => 'Edición de productos',
        	'slug' => 'products.edit',
        	'description' => 'Editar cualquier dato de un producto del sistema',
        ]);
        Permission::create([
        	'name' => 'Eliminar producto',
        	'slug' => 'products.destroy',
        	'description' => 'Eliminar cualquier producto del sistema',
        ]);
        
        //orders orders.index_todas
        Permission::create([
            'name' => 'Navegar ordenes pendientes',
            'slug' => 'orders.index',
            'description' => 'Lista y Navega las ordenes del sistema pendientes',
        ]);
        Permission::create([
            'name' => 'Navegar todas las ordenes',
            'slug' => 'orders.index_todas',
            'description' => 'Lista y Navega todos los ordenes del sistema',
        ]);
        Permission::create([
            'name' => 'Navegar ordenes propias',
            'slug' => 'orders.index_cliente',
            'description' => 'Lista y Navega sus propias ordenes',
        ]);
        Permission::create([
            'name' => 'Ver detalle de orden',
            'slug' => 'orders.show',
            'description' => 'Ver en detalle cada orden del sistema',
        ]);
        Permission::create([
            'name' => 'Guardar orden',
            'slug' => 'orders.store',
            'description' => 'Almacenar en bases de datos la orden',
        ]);
        Permission::create([
        	'name' => 'Creación de ordenes',
        	'slug' => 'orders.create',
        	'description' => 'Crear orden',
        ]);
        Permission::create([
        	'name' => 'Edición de ordenes',
        	'slug' => 'orders.edit',
        	'description' => 'Editar cualquier dato de una orden del sistema',
        ]);
        Permission::create([
        	'name' => 'Eliminar orden',
        	'slug' => 'orders.destroy',
        	'description' => 'Eliminar cualquier orden del sistema',
        ]);
       
       //escolaridad
        Permission::create([
            'name' => 'Navegar escolaridades',
            'slug' => 'escolaridad.index',
            'description' => 'Lista y Navega todos las escolaridades del sistema',
        ]);
        Permission::create([
        	'name' => 'Ver detalle de escolaridad',
        	'slug' => 'escolaridad.show',
        	'description' => 'Ver en detalle cada escolaridad del sistema',
        ]);
        Permission::create([
        	'name' => 'Creacion de escolaridades',
        	'slug' => 'escolaridad.create',
        	'description' => 'Editar cualquier dato de una escolaridad del sistema',
        ]);
        Permission::create([
        	'name' => 'Edición de escolaridades',
        	'slug' => 'escolaridad.edit',
        	'description' => 'Editar cualquier dato de una escolaridad del sistema',
        ]);
        Permission::create([
        	'name' => 'Eliminar escolaridad',
        	'slug' => 'escolaridad.destroy',
        	'description' => 'Eliminar cualquier escolaridad del sistema',
        ]);
          
          //Orden_estatus
        Permission::create([
        	'name' => 'Navegar Orden_estatus',
        	'slug' => 'orden_estatus.index',
        	'description' => 'Lista y Navega todos los Orden_estatus del sistema',
        ]);
        Permission::create([
        	'name' => 'Ver detalle de Orden_estatus',
        	'slug' => 'orden_estatus.show',
        	'description' => 'Ver en detalle cada Orden_estatus del sistema',
        ]);
        Permission::create([
        	'name' => 'Creación de Orden_estatus',
        	'slug' => 'orden_estatus.create',
        	'description' => 'Editar cualquier dato de una Orden_estatus del sistema',
        ]);
        Permission::create([
        	'name' => 'Edición de Orden_estatus',
        	'slug' => 'orden_estatus.edit',
        	'description' => 'Editar cualquier dato de una Orden_estatus del sistema',
        ]);
        Permission::create([
        	'name' => 'Eliminar Orden_estatus',
        	'slug' => 'orden_estatus.destroy',
        	'description' => 'Eliminar cualquier Orden_estatus del sistema',
        ]);
       
        //ocupaciones
        Permission::create([
            'name' => 'Navegar ocupaciones',
            'slug' => 'ocupaciones.index',
            'description' => 'Lista y Navega todos los ocupaciones del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de ocupación',
            'slug' => 'ocupaciones.show',
            'description' => 'Ver en detalle cada ocupación del sistema',
        ]);
        Permission::create([
            'name' => 'Creación de ocupaciones',
            'slug' => 'ocupaciones.create',
            'description' => 'Editar cualquier dato de una ocupación del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de ocupaciones',
            'slug' => 'ocupaciones.edit',
            'description' => 'Editar cualquier dato de una ocupación del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar ocupación',
            'slug' => 'ocupaciones.destroy',
            'description' => 'Eliminar cualquier ocupación del sistema',
        ]);

            //estatus_social
        Permission::create([
            'name' => 'Navegar estatus social',
            'slug' => 'estatus_social.index',
            'description' => 'Lista y Navega todos los estatus social del sistema',
        ]);
        Permission::create([
            'name' => 'Ver detalle de estatus social',
            'slug' => 'estatus_social.show',
            'description' => 'Ver en detalle cada estatus social del sistema',
        ]);
        Permission::create([
            'name' => 'Creación de estatus social',
            'slug' => 'estatus_social.create',
            'description' => 'Editar cualquier dato de un estatus social del sistema',
        ]);
        Permission::create([
            'name' => 'Edición de estatus social',
            'slug' => 'estatus_social.edit',
            'description' => 'Editar cualquier dato de un estatus social del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar estatus social',
            'slug' => 'estatus_social.destroy',
            'description' => 'Eliminar cualquier estatus social del sistema',
        ]);

        //tipo_sangre
        Permission::create([
        	'name' => 'Navegar tipos de sangre',
        	'slug' => 'tipo_sangre.index',
        	'description' => 'Lista y Navega todos los tipos de sangre del sistema',
        ]);
        Permission::create([
        	'name' => 'Ver detalle de tipo de sangre',
        	'slug' => 'tipo_sangre.show',
        	'description' => 'Ver en detalle cada tipo de sangre del sistema',
        ]);
        Permission::create([
        	'name' => 'Creación de tipo de sangre',
        	'slug' => 'tipo_sangre.create',
        	'description' => 'Editar cualquier dato de un tipo de sangre del sistema',
        ]);
        Permission::create([
        	'name' => 'Edición de tipo de sangre',
        	'slug' => 'tipo_sangre.edit',
        	'description' => 'Editar cualquier dato de un tipo de sangre del sistema',
        ]);
        Permission::create([
            'name' => 'Eliminar tipo de sangre',
            'slug' => 'tipo_sangre.destroy',
            'description' => 'Eliminar cualquier tipo de sangre del sistema',
        ]); 
        Permission::create([
        	'name' => 'Ver enlace de catálagos',
        	'slug' => 'catalagos',
        	'description' => 'Puede ver el menú de enlaces catálagos',
        ]);
        Permission::create([
            'name' => 'Ver enlace de ordenes',
            'slug' => 'ordenes',
            'description' => 'Puede ver el menú de enlaces ordenes',
        ]);


    }
}
