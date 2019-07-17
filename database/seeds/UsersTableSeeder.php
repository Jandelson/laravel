<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $user = new \App\User();
        $user->create([
        	'name' => 'Jandelson Oliveira',
        	'email' => 'jandelson_oliveira@yahoo.com.br',
        	'password' => bcrypt('12345678')
        ]);
        */
        factory(App\User::class, 30)->create();
    }
}
