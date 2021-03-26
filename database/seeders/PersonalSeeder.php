<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Personal::create([
            'rut' => '180332403',
            'nombre' => 'Juan',
            'apellido' => 'Pérez',
            'cargo' => 'Admin',
            'password' => Hash::make('JP2016'),
        ]);
        \App\Models\Personal::create([
            'rut' => '153204209',
            'nombre' => 'Blanca',
            'apellido' => 'Ríos',
            'cargo' => 'Bodega',
            'password' => Hash::make('BR2016'),
        ]);
    }
}
