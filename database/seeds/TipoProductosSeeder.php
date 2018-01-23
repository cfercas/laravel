<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\TipoProductos;

class TipoProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      TipoProductos::create([
          'tipo' => 'Categoria 1',
      ]);
      TipoProductos::create([
          'tipo' => 'Categoria 2',
      ]);
      TipoProductos::create([
          'tipo' => 'Categoria 3',
      ]);
      TipoProductos::create([
          'tipo' => 'Categoria 4',
      ]);
      TipoProductos::create([
          'tipo' => 'Categoria 5',
      ]);
      TipoProductos::create([
          'tipo' => 'Categoria 6',
      ]);

    }
}
