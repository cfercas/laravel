<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Direcciones;

class datosDireccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Direcciones::create([
          'id_usuario' => '5',
          'direccion' => 'la macarena nº5 6-A',
          'codigoPostal' => '35002',
          'localidad' => 'Las Palmas',
          'provincia' => 'Las Palmas de GC',
          'pais' => 'España',
      ]);
      Direcciones::create([
          'id_usuario' => '5',
          'direccion' => 'avenida del molocombo nº3',
          'codigoPostal' => '35012',
          'localidad' => 'Las Palmas',
          'provincia' => 'Las Palmas de GC',
          'pais' => 'España',
      ]);
      Direcciones::create([
          'id_usuario' => '3',
          'direccion' => 'c/la algaroba nº33 Puerta B',
          'codigoPostal' => '35025',
          'localidad' => 'Las Palmas',
          'provincia' => 'Las Palmas de GC',
          'pais' => 'España',
      ]);
    }
}
