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

	$users  = \App\User::find(28);
	$users->delete();



    return view('welcome');
});

Route::get('/hello/{name}', function ($name) {
    return view('hello' ,['name' => $name]);
});
