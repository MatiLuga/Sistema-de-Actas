<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Limpiar la tabla users antes de insertar nuevos registros
        DB::table('users')->truncate();

        // Crear usuarios de prueba
        DB::table('users')->insert([
            [
                'name' => 'Mati',
                'email' => 'mati@gmail.com',
                'password' => Hash::make('123456'),
            ],
            // Agrega más usuarios según sea necesario
        ]);
    }
}