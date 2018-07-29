<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){
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

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
			->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
			->middleware('permission:roles.edit');

	//productos
	Route::post('products/store', 'ProductsController@store')->name('products.store')
			->middleware('permission:products.create');

	Route::get('products', 'ProductsController@index')->name('products.index')
			->middleware('permission:products.index');

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

	//users
	Route::get('users', 'UserController@index')->name('users.index')
			->middleware('permission:users.index');

	Route::put('users/{user}', 'UserController@update')->name('users.update')
			->middleware('permission:users.edit');

	Route::get('users/{user}', 'UserController@show')->name('users.show')
			->middleware('permission:users.show');

	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
			->middleware('permission:users.destroy');

	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
			->middleware('permission:users.edit');


});

Route::resource('/clientes', 'ClientesController');

Route::resource('/escolaridad', 'EscolaridadController');

Route::resource('/productos', 'ProductsController');

Route::resource('/estatus-social', 'EstatusSocialController');

Route::resource('/ocupaciones', 'OcupacionesController');

Route::resource('/orden-estatus', 'OrdenEstatusController');

// Route::resource('/roles', 'RolesController');

Route::resource('/tipos-sangre', 'TiposSangreController');

Route::resource('orders', 'OrdersController');

Route::apiResource('/roles-vue','RolesvueController', [
"only"=>["index","store","update","destroy"]
]);

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
