<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'lastname' => "admin",
            'firstname' => "admin",
            'gender' => "male",
            'adresse' => ".",
            'N°Contract' => 0,
            'N°Client' => 0,
            'email' => "admin@gmail.com",
            'password' => bcrypt("adminpass"),
        ]);
    }
}
