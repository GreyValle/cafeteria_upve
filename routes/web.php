<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){
	
	//comentarios
	Route::get('comentarios', 'ComentarioController@index_2')->name('comentarios.index_2')->middleware('permission:comentarios.index_2');

	Route::delete('comentarios/{comentario}', 'ComentarioController@destroy_2')->name('comentarios.destroy_2');

	//roles
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
			->middleware('permission:roles.create');

	Route::get('roles', 'RoleController@index')->name('roles.index')
			->middleware('permission:roles.index');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')
			->middleware('permission:roles.create');

	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
			->middleware('permission:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
			->middleware('permission:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
			->middleware('permission:roles.edit');

	//productos
	Route::post('products/store', 'ProductsController@store')->name('products.store')
			->middleware('permission:products.create');

	Route::get('products', 'ProductsController@index')->name('products.index')
			->middleware('permission:products.index');
	
	Route::get('products-todos-tabla', 'ProductsController@index_todos')->name('products.index_todos_tabla')
			->middleware('permission:products.index_todos_tabla');

	Route::get('products/create', 'ProductsController@create')->name('products.create')
			->middleware('permission:products.create');

	Route::put('products/{product}', 'ProductsController@update')->name('products.update')
			->middleware('permission:products.edit');

	Route::get('products/{product}', 'ProductsController@show')->name('products.show')
			->middleware('permission:products.show');

	Route::delete('products/{product}', 'ProductsController@destroy')->name('products.destroy')
			->middleware('permission:products.destroy');

	Route::get('products/{product}/edit', 'ProductsController@edit')->name('products.edit')
			->middleware('permission:products.edit');

	//users users.update_saldo
	Route::get('users', 'UserController@index')->name('users.index')
			->middleware('permission:users.index');

	Route::put('users/{user}', 'UserController@update')->name('users.update')
			->middleware('permission:users.edit');

	Route::put('users/saldo-update/{user}', 'SaldoController@update')->name('users.update_saldo')
			->middleware('permission:users.update_saldo');

	Route::get('users/{user}', 'UserController@show')->name('users.show')
			->middleware('permission:users.show');

	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
			->middleware('permission:users.destroy');

	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
			->middleware('permission:users.edit');

			//escolaridad


	Route::post('escolaridad/store', 'EscolaridadController@store')->name('escolaridad.store')
			->middleware('permission:escolaridad.create');

	Route::get('escolaridad', 'EscolaridadController@index')->name('escolaridad.index')
			->middleware('permission:escolaridad.index');

	Route::get('escolaridad/create', 'EscolaridadController@create')->name('escolaridad.create')
			->middleware('permission:escolaridad.create');

	Route::get('escolaridad/{escolaridad}', 'EscolaridadController@show')->name('escolaridad.show')
			->middleware('permission:escolaridad.show');

	Route::delete('escolaridad/{escolaridad}', 'EscolaridadController@destroy')->name('escolaridad.destroy')
			->middleware('permission:escolaridad.destroy');

	Route::get('escolaridad/{escolaridad}/edit', 'EscolaridadController@edit')->name('escolaridad.edit')
			->middleware('permission:escolaridad.edit');

			//estatus_social

	Route::post('estatus_social/store', 'EstatusSocialController@store')->name('estatus_social.store')
			->middleware('permission:estatus_social.create');
	
	Route::get('estatus_social', 'EstatusSocialController@index')->name('estatus_social.index')
			->middleware('permission:estatus_social.index');

	Route::get('estatus_social/create', 'EstatusSocialController@create')->name('estatus_social.create')
			->middleware('permission:estatus_social.create');

	Route::put('estatus_social/{estatus_social}', 'EstatusSocialController@update')->name('estatus_social.update')
			->middleware('permission:estatus_social.edit');

	Route::get('estatus_social/{estatus_social}', 'EstatusSocialController@show')->name('estatus_social.show')
			->middleware('permission:estatus_social.show');

	Route::delete('estatus_social/{estatus_social}', 'EstatusSocialController@destroy')->name('estatus_social.destroy')->middleware('permission:estatus_social.destroy');

	Route::get('estatus_social/{estatus_social}/edit', 'EstatusSocialController@edit')->name('estatus_social.edit')->middleware('permission:estatus_social.edit');

	
			//ocupacion
	Route::post('ocupacion/store', 'OcupacionesController@store')->name('ocupacion.store')
			->middleware('permission:ocupacion.create');

	Route::get('ocupacion', 'OcupacionesController@index')->name('ocupacion.index')
			->middleware('permission:ocupacion.index');

	Route::put('ocupacion/{user}', 'OcupacionesController@update')->name('ocupacion.update')
			->middleware('permission:ocupacion.edit');
	
	Route::get('ocupacion/create', 'OcupacionesController@create')->name('ocupacion.create')
			->middleware('permission:ocupacion.create');

	Route::get('ocupacion/{user}', 'OcupacionesController@show')->name('ocupacion.show')
			->middleware('permission:ocupacion.show');

	Route::delete('ocupacion/{user}', 'OcupacionesController@destroy')->name('ocupacion.destroy')
			->middleware('permission:ocupacion.destroy');

	Route::get('ocupacion/{user}/edit', 'OcupacionesController@edit')->name('ocupacion.edit')
			->middleware('permission:ocupacion.edit');
			
			//orden_estatus
	Route::post('orden_estatus/store', 'OrdenEstatusController@store')->name('orden_estatus.store')
			->middleware('permission:orden_estatus.create');

	Route::get('orden_estatus', 'OrdenEstatusController@index')->name('orden_estatus.index')
			->middleware('permission:orden_estatus.index');

	Route::put('orden_estatus/{estatus}', 'OrdenEstatusController@update')->name('orden_estatus.update')
			->middleware('permission:orden_estatus.edit');

	Route::get('orden_estatus/create', 'OrdenEstatusController@create')->name('orden_estatus.create')
			->middleware('permission:orden_estatus.create');

	Route::get('orden_estatus/{estatus}', 'OrdenEstatusController@show')->name('orden_estatus.show')
			->middleware('permission:orden_estatus.show');

	Route::delete('orden_estatus/{estatus}', 'OrdenEstatusController@destroy')->name('orden_estatus.destroy')
			->middleware('permission:orden_estatus.destroy');

	Route::get('orden_estatus/{estatus}/edit', 'OrdenEstatusController@edit')->name('orden_estatus.edit')
			->middleware('permission:orden_estatus.edit');			
			
			//orders
	Route::post('orders/store', 'OrdersController@store')->name('orders.store')
			->middleware('permission:orders.create');

	Route::get('orders-solicitadas', 'OrdersController@index')->name('orders.index')
			->middleware('permission:orders.index');

	Route::get('orders-todas', 'OrdersController@index_todas')->name('orders.index_todas')
			->middleware('permission:orders.index_todas');

	Route::get('orders-propias', 'OrdersController@index_cliente')->name('orders.index_cliente')
			->middleware('permission:orders.index_cliente');

	Route::put('orders/{user}', 'OrdersController@update')->name('orders.update')
			->middleware('permission:orders.edit');

	Route::get('orders/create', 'OrdersController@create')->name('orders.create')
			->middleware('permission:orders.create');

	Route::get('orders/{user}', 'OrdersController@show')->name('orders.show')
			->middleware('permission:orders.show');

	Route::delete('orders/{user}', 'OrdersController@destroy')->name('orders.destroy')
			->middleware('permission:orders.destroy');

	Route::get('orders/{user}/edit', 'OrdersController@edit')->name('orders.edit')
			->middleware('permission:orders.edit');

			//tipo_sangre
	Route::post('tipo_sangre/store', 'TiposSangreController@store')->name('tipo_sangre.store')
			->middleware('permission:tipo_sangre.create');
			
	Route::get('tipo_sangre', 'TiposSangreController@index')->name('tipo_sangre.index')
			->middleware('permission:tipo_sangre.index');

	Route::put('tipo_sangre/{user}', 'TiposSangreController@update')->name('tipo_sangre.update')
			->middleware('permission:tipo_sangre.edit');

	Route::get('tipo_sangre/create', 'TiposSangreController@create')->name('tipo_sangre.create')
			->middleware('permission:tipo_sangre.create');

	Route::get('tipo_sangre/{user}', 'TiposSangreController@show')->name('tipo_sangre.show')
			->middleware('permission:tipo_sangre.show');

	Route::delete('tipo_sangre/{user}', 'TiposSangreController@destroy')->name('tipo_sangre.destroy')
			->middleware('permission:tipo_sangre.destroy');

	Route::get('tipo_sangre/{user}/edit', 'TiposSangreController@edit')->name('tipo_sangre.edit')
			->middleware('permission:tipo_sangre.edit');
});

// Route::resource('/clientes', 'ClientesController');

// Route::resource('/escolaridad', 'EscolaridadController');

Route::resource('/productos', 'ProductsController', [
"only"=>["update"]
]);
Route::resource('escolaridad', 'EscolaridadController', [
"only"=>["update"]
]);
Route::resource('estatus_social', 'EstatusSocialController', [
"only"=>["update"]
]);
Route::resource('ocupacion', 'OcupacionesController', [
"only"=>["update"]
]);
Route::resource('orden_estatus', 'OrdenEstatusController', [
"only"=>["update"]
]);
Route::resource('tipo_sangre', 'TiposSangreController', [
"only"=>["update"]
]);

Route::apiResource('/roles-vue','RolesvueController', [
"only"=>["index","store","update","destroy"]
]);

Route::apiResource('/comentarios-usuario','ComentarioController');


Route::get('productos/imagenes/{filename}', function($filename){
	$path=storage_path("app/images/$filename");
	if (!\File::exists($path)) abort(404);
	$file= \File::get($path);
	$type= \File::mimeType($path);
	$response=Response::make($file,200);
	$response->header("Content-Type",$type);
	return $response;
});



Route::get('/home', 'HomeController@index')->name('home');
