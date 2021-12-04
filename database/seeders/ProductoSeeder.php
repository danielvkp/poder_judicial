<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  public function run(){
     DB::table('producto')->insert([
         'nombre'        => 'Producto 1',
         'precio_total'  => 123.45,
         'impuesto'      => 5
     ]);

     DB::table('producto')->insert([
       'nombre'        => 'Producto 2',
       'precio_total'  => 45.65,
       'impuesto'      => 15
     ]);

     DB::table('producto')->insert([
      'nombre'        => 'Producto 3',
      'precio_total'  => 39.73,
      'impuesto'      => 12
     ]);

     DB::table('producto')->insert([
       'nombre'        => 'Producto 4',
       'precio_total'  => 250,
       'impuesto'      => 8
     ]);

     DB::table('producto')->insert([
      'nombre'        => 'Producto 5',
      'precio_total'  => 59.35,
      'impuesto'      => 10
     ]);
  }
}
