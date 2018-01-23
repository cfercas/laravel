<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
          'name' => 'Cristina Fernández',
          'nameUsuario' => 'cristina',
          'type' => 'Admin',
          'email' => 'cristinita@gmail.com',
          'telefono' => '666325220',
          'password' => bcrypt('saturno'),
          'confirmed' => '1',
      ]);
      User::create([
          'name' => 'Nacho Martin',
          'nameUsuario' => 'administrador',
          'type' => 'Admin',
          'email' => 'nachete@gmail.com',
          'telefono' => '662522203',
          'password' => bcrypt('saturno'),
          'confirmed' => '1',
      ]);
      User::create([
          'name' => 'Maria Magdalena',
          'nameUsuario' => 'maria',
          'type' => 'Usuario',
          'email' => 'mariam@gmail.com',
          'telefono' => '625252503',
          'password' => bcrypt('saturno'),
      ]);
      User::create([
          'name' => 'Joaquin Reyes',
          'nameUsuario' => 'joakin',
          'type' => 'Usuario',
          'email' => 'reyjokin@gmail.com',
          'telefono' => '652003136',
          'password' => bcrypt('saturno'),
      ]);
      User::create([
          'name' => 'Valentina Omega',
          'nameUsuario' => 'vale',
          'type' => 'Usuario',
          'email' => 'valentinaa@gmail.com',
          'telefono' => '666323255',
          'password' => bcrypt('saturno'),
          'confirmed' => '1',
      ]);
      User::create([
          'name' => 'Cristina Maria',
          'nameUsuario' => 'cristinam',
          'type' => 'Usuario',
          'email' => 'cristinitamaria@gmail.com',
          'telefono' => '669999220',
          'password' => bcrypt('saturno'),
      ]);
      User::create([
          'name' => 'Nacho Gonzales',
          'nameUsuario' => 'gonzo',
          'type' => 'Usuario',
          'email' => 'gonzales@gmail.com',
          'telefono' => '928565422',
          'password' => bcrypt('saturno'),
      ]);
      User::create([
          'name' => 'Maria Suarez Castellano',
          'nameUsuario' => 'mariasuarez',
          'type' => 'Usuario',
          'email' => 'mariasuarez@gmail.com',
          'telefono' => '625998989',
          'password' => bcrypt('saturno'),
      ]);
      User::create([
          'name' => 'Maria Valverde',
          'nameUsuario' => 'valverde',
          'type' => 'Usuario',
          'email' => 'valve@gmail.com',
          'telefono' => '695858544',
          'password' => bcrypt('saturno'),
      ]);
      User::create([
          'name' => 'Valentina Hernandez',
          'nameUsuario' => 'valehhh',
          'type' => 'Usuario',
          'email' => 'hhhvalentina@gmail.com',
          'telefono' => '625331398',
          'password' => bcrypt('saturno'),
      ]);
      User::create([
          'name' => 'Oscar Calderon Hernandez',
          'nameUsuario' => 'oscar',
          'type' => 'Usuario',
          'email' => 'oscarc@gmail.com',
          'telefono' => '928651444',
          'password' => bcrypt('saturno'),
      ]);
      User::create([
          'name' => 'Carlos Ramirez Hernandez',
          'nameUsuario' => 'carlos99',
          'type' => 'Usuario',
          'email' => '99carlos@gmail.com',
          'telefono' => '620311379',
          'password' => bcrypt('saturno'),
      ]);

    }
}
