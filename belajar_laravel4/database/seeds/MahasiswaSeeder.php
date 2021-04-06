<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;



class MahasiswaSeeder extends Seeder
{
    public function run()
    {

    	$faker = Faker::create('id_ID');

    	for($i = 1; $i <= 50; $i++){

    		DB::table('mahasiswa')->insert([
    			'nama' => $faker->name,
    			'alamat' => $faker->address,
    			'no_telp' => $faker->phoneNumber,
    		]);

    	}

    }
}

