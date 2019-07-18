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
    return view('welcome');
});

Route::get('/hello/{name}', function ($name) {
    return view('hello' ,['name' => $name]);
});
