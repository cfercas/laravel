<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Empleados;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //DB::table('empleados')->truncate();
      Empleados::create([
          'name' => 'Cristina Fernández',
          'nameUsuario' => 'cristina29',
          'email' => 'cristinita@gmail.com',
          'telefono' => '666325220',
          'password' => bcrypt('saturno'),
      ]);
      Empleados::create([
          'name' => 'Ignacio Martin',
          'nameUsuario' => 'nachete',
          'email' => 'nachete@gmail.com',
          'telefono' => '662522203',
          'password' => bcrypt('saturno'),
      ]);
      Empleados::create([
          'name' => 'Maria Ortiz',
          'nameUsuario' => 'mariateresa',
          'email' => 'teresam@gmail.com',
          'telefono' => '645621452',
          'password' => bcrypt('123456'),
      ]);
      Empleados::create([
          'name' => 'Joaquin Navarro',
          'nameUsuario' => 'joaquin',
          'email' => 'joaquinn@gmail.com',
          'telefono' => '652558820',
          'password' => bcrypt('123456'),
      ]);
      Empleados::create([
          'name' => 'Maria Teresa Martinez',
          'nameUsuario' => 'mariamartinez',
          'email' => 'mariahghg@gmail.com',
          'telefono' => '652859565',
          'password' => bcrypt('123456'),
      ]);
      Empleados::create([
          'name' => 'Yohana Suarez',
          'nameUsuario' => 'yohana',
          'email' => 'yohana@gmail.com',
          'telefono' => '925851233',
          'password' => bcrypt('123456'),
      ]);
      Empleados::create([
          'name' => 'Cristina Hernández Colmero',
          'nameUsuario' => 'cricri2',
          'email' => 'cricri@gmail.com',
          'telefono' => '633202125',
          'password' => bcrypt('123456'),
      ]);
      Empleados::create([
          'name' => 'Marta Navarro',
          'nameUsuario' => 'martita',
          'email' => 'martita@gmail.com',
          'telefono' => '695826232',
          'password' => bcrypt('123456'),
      ]);
      Empleados::create([
          'name' => 'Samuel Ojeda Navarro',
          'nameUsuario' => 'samuel',
          'email' => 'samuel@gmail.com',
          'telefono' => '652329599',
          'password' => bcrypt('123456'),
      ]);
      Empleados::create([
          'name' => 'Ivan Castellano',
          'nameUsuario' => 'ivancaste',
          'email' => 'ivancaste@gmail.com',
          'telefono' => '952858585',
          'password' => bcrypt('123456'),
      ]);
      Empleados::create([
          'name' => 'Carlos Suarez',
          'nameUsuario' => 'carlitos',
          'email' => 'carlitos@gmail.com',
          'telefono' => '928257575',
          'password' => bcrypt('123456'),
      ]);
      Empleados::create([
          'name' => 'Carlos Montesdeoca',
          'nameUsuario' => 'carlos25',
          'email' => 'carlos25@gmail.com',
          'telefono' => '928636300',
          'password' => bcrypt('123456'),
      ]);
      Empleados::create([
          'name' => 'Ramón Ojeda',
          'nameUsuario' => 'ramon',
          'email' => 'ramon@gmail.com',
          'telefono' => '666288788',
          'password' => bcrypt('123456'),
      ]);
      Empleados::create([
          'name' => 'Valentina Gonzalez',
          'nameUsuario' => 'Valentina',
          'email' => 'vanlentinag@gmail.com',
          'telefono' => '928650010',
          'password' => bcrypt('123456'),
      ]);
      Empleados::create([
          'name' => 'Shaila Peréz',
          'nameUsuario' => 'shaila',
          'email' => 'shailap@gmail.com',
          'telefono' => '928670303',
          'password' => bcrypt('123456'),
      ]);
      Empleados::create([
          'name' => 'Raquel Montesdeoca',
          'nameUsuario' => 'raquelita',
          'email' => 'raquelita@gmail.com',
          'telefono' => '623088080',
          'password' => bcrypt('123456'),
      ]);
    }
}
