<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Bancarios;

class datosBancariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Bancarios::create([
          'id_usuario' => '5',
          'tipoCuenta' => 'VISA',
          'titular' => 'Valentina',
          'numTarjeta' => '25325145214521452856',
          'cvv' => '322',
          'caducidad' => '0219',
      ]);
      Bancarios::create([
          'id_usuario' => '5',
          'tipoCuenta' => 'MASTERCARD',
          'titular' => 'Valentina',
          'numTarjeta' => '253125420221200025896',
          'cvv' => '155',
          'caducidad' => '0220',
      ]);
      Bancarios::create([
          'id_usuario' => '4',
          'tipoCuenta' => 'VISA',
          'titular' => 'Joaquin Reyes',
          'numTarjeta' => '522587798965421584785',
          'cvv' => '512',
          'caducidad' => '0216',
      ]);

    }
}
