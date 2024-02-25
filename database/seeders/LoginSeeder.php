<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

   

            DB::table('Utilisateurs')->insert([
            "nom"=>Str::random(10),
            "prenom"=>Str::random(10),
            "email"=>Str::random(10).'@gmail.com',
            "password"=>Hash::make('password'),
            "tele"=>Str::random(10)

            ]);
}
}
