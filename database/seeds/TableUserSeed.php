<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TableUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('id_ID');
        for ($i=0; $i < 50; $i++) { 
        	$user = new \App\User;
        	$user->role = 'mandor';
        	$user->id = mt_rand(10000,19999);
        	$mand = \App\Mandor::create([
        		'id' => mt_rand(1000,1999),
        		'user_id' => $user->id,
        		'nama_lengkap' => $faker->name,
        		// 'nohp' => mt_rand(0810000,0899999),
        		'alamat' => $faker->address
        	]);
        	$user->name = $mand->nama_lengkap;
        	$user->email = $mand->nama_lengkap.'@gmail.com';
        	$user->password = bcrypt('secret');
        	$user->save();
        }
    }
}
