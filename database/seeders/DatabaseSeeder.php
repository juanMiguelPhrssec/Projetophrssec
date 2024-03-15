<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('pessoas')->insert([
            'name'=> 'Valter',
            'email'=>'Valter@tinoco.com',
            'password'=> Hash::make('password'),
            'empresas_id'=>'5'
        ]);
        DB::table('pessoas')->insert([
            'name'=>'Carlos',
            'email'=>'Carlinhos@gmail.com',
            'password'=>Hash::make('password'),
            'empresas_id'=>'4'
        ]);
        
    }
}
