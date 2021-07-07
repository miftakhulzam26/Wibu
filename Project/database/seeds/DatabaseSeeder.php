<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        User::create([
            'name' => 'Admin',
            'job' => '1',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
