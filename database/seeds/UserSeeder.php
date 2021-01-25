<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Jose Ticona Quispecahuana',
        	'document' => 'CEDULA',
        	'nro_document' => '7086554LP',
        	'address' => 'Extranca Rio Seco',
        	'telephone' => '73545670',
        	'email' => 'jose@gmail.com',
        	'user' => 'jose',
        	'password' => bcrypt('123'),
        	'id_roles' => '1',
            'image' => 'img\user\user1.jpg',
		]);
		DB::table('users')->insert([
        	'name' => 'Jhackelyn choque',
        	'document' => 'CEDULA',
        	'nro_document' => '7556482LP',
        	'address' => 'Extranca Rio Seco',
        	'telephone' => '76548193',
        	'email' => 'jhacky@gmail.com',
        	'user' => 'jacky',
        	'password' => bcrypt('123'),
        	'id_roles' => '2',
            'image' => 'img\user\user1.jpg',
        ]);
    }
}
