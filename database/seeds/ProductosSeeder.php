<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Productos;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Productos::create([
          'titulo' => 'Producto 1',
          'descripcion' => 'Descripcion de producto 1',
          'foto' => '/Future/images/Productos/p1.jpg',
          'id_tipo' => '1',
          'precio' => '32.2',
          'cantidad' => '5',
      ]);
      Productos::create([
          'titulo' => 'Producto 2',
          'descripcion' => 'Descripcion de producto 2',
          'foto' => '/Future/images/Productos/p2.jpg',
          'id_tipo' => '3',
          'precio' => '99.95',
          'cantidad' => '1',
      ]);
      Productos::create([
          'titulo' => 'Producto 3',
          'descripcion' => 'Descripcion de producto 3',
          'foto' => '/Future/images/Productos/p3.jpg',
          'id_tipo' => '1',
          'precio' => '30',
          'cantidad' => '0',
      ]);
      Productos::create([
          'titulo' => 'Producto 4',
          'descripcion' => 'Descripcion de producto 4',
          'foto' => '/Future/images/Productos/p4.jpg',
          'id_tipo' => '5',
          'precio' => '120.03',
          'cantidad' => '13',
      ]);
      Productos::create([
          'titulo' => 'Producto 5',
          'descripcion' => 'Descripcion de producto 5',
          'foto' => '/Future/images/Productos/p5.jpg',
          'id_tipo' => '6',
          'precio' => '3.00',
          'cantidad' => '50',
      ]);
      Productos::create([
          'titulo' => 'Producto 6',
          'descripcion' => 'Descripcion de producto 6',
          'foto' => '/Future/images/Productos/p6.jpg',
          'id_tipo' => '6',
          'precio' => '32.20',
          'cantidad' => '5',
      ]);
      Productos::create([
          'titulo' => 'Producto 7',
          'descripcion' => 'Descripcion de producto 7',
          'foto' => '/Future/images/Productos/p7.png',
          'id_tipo' => '6',
          'precio' => '12.90',
          'cantidad' => '2',
      ]);
      Productos::create([
          'titulo' => 'Producto 8',
          'descripcion' => 'Descripcion de producto 8',
          'foto' => '/Future/images/Productos/p7.png',
          'id_tipo' => '5',
          'precio' => '1.90',
          'cantidad' => '20',
      ]);
      Productos::create([
          'titulo' => 'Producto 9',
          'descripcion' => 'Descripcion de producto 9',
          'foto' => '/Future/images/Productos/p7.png',
          'id_tipo' => '6',
          'precio' => '15.10',
          'cantidad' => '12',
      ]);
      Productos::create([
          'titulo' => 'Producto 10',
          'descripcion' => 'Descripcion de producto 10',
          'foto' => '/Future/images/Productos/p7.png',
          'id_tipo' => '6',
          'precio' => '59.95',
          'cantidad' => '2',
      ]);
      Productos::create([
          'titulo' => 'Producto 11',
          'descripcion' => 'Descripcion de producto 11',
          'foto' => '/Future/images/Productos/p7.png',
          'id_tipo' => '1',
          'precio' => '2.90',
          'cantidad' => '150',
      ]);
      Productos::create([
          'titulo' => 'Producto 12',
          'descripcion' => 'Descripcion de producto 12',
          'foto' => '/Future/images/Productos/p7.png',
          'id_tipo' => '2',
          'precio' => '25.75',
          'cantidad' => '50',
      ]);

    }
}
