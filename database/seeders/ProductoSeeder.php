<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Producto::create([
            'cod_producto' => '100',
            'descripcion' => 'Casco de seguridad',
            'stock' => 50,
            'proveedor' => 'Vicsa S.A',
            'fecha_ingreso' => (new Carbon('2016-04-20'))
        ]);
        \App\Models\Producto::create([
            'cod_producto' => '101',
            'descripcion' => 'Guantes de seguridad',
            'stock' => 50,
            'proveedor' => 'Fesam LTDA',
            'fecha_ingreso' => (new Carbon('2016-04-22'))
        ]);
        \App\Models\Producto::create([
            'cod_producto' => '102',
            'descripcion' => 'Calzado de seguridad',
            'stock' => 50,
            'proveedor' => 'Litios S.A',
            'fecha_ingreso' => (new Carbon('2016-04-22'))
        ]);
    }
}
