<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Compra;


class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Compra::create([
          'id_compra' => '1',
          'id_producto' => '1',

      ]);
      Compra::create([
          'id_compra' => '1',
          'id_producto' => '4',

      ]);
      Compra::create([
          'id_compra' => '1',
          'id_producto' => '3',

      ]);
      Compra::create([
          'id_compra' => '1',
          'id_producto' => '2',

      ]);
      Compra::create([
          'id_compra' => '2',
          'id_producto' => '1',

      ]);
    }
}
