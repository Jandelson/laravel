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
	
	/* Consultando dados do banco
	$sql = "select * from users where id = ?";
	$users = \DB::select($sql, [4]);
	$users = \DB::table('users')
		->where('id', 4)
		->select('id', 'name')
		->get();
	$users  = \App\User::all();
	dd($users);
	*/
	/*
	$users  = \App\User::all()->find(31);
	$users->name 		= "Jandelson Edited";
	$users->email 		= "jandelson.oliveira@yahoo.com.br";
	$users->password 	= bcrypt('123456');
	$users->save();
	*/

	/*
	$userData = [
		'name' => 'NOVO EDITED',
	];

	$users  = \App\User::all()->find(31);
	$users->update($userData);
	*/

	//$users  = \App\User::find(25);
	$users = \App\User::WhereIn('id', [23,24]);
	$users->delete();

	$users = [
		['name' => '1', 'email' => '1@jandelson.com.br'],
		['name' => '2', 'email' => '2@jandelson.com.br'],
		['name' => '3', 'email' => '3@jandelson.com.br']
	];

    return view('welcome', compact('users'));
});

Route::get('/hello/{name}', function ($name) {
    return view('hello' ,['name' => $name]);
    //return redirect()->route('produtos_single');
});


//Users
//Route::get('/users', 'Test\UserController@index');
//Route::get('/users/{id}', 'Test\UserController@show');
//Route::post('/users', 'UserController@save');
//Route::resource('/users', 'Test\UserController');
//Route::resource('/products', 'Test\ProductController');
Route::namespace('Test')->group(function () {
	Route::get('/users/{id}', 'UserController@show');
	Route::get('/prod', 'ProductController@index');
});

Route::prefix('products')->name('products_')->group(function() {

	Route::get('/ok', function(){
		return 'Produtos index';
	})->name('index');

	Route::get('/1', function(){
		return 'Produtos 1';
	})->name('single');
});

Route::view('/view', 'view', ['name' => 'Jandelson']);

Route::get('/show/{name?}/{sobre?}', function ($name = "Jandelson Oliveira", $sobre = 'ok') {
    return view('view' ,['name' => $name, 'sobre' => $sobre]);
});