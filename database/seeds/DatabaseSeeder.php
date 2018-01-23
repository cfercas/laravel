<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(EmpleadosSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TipoProductosSeeder::class);
        $this->call(datosDireccionesSeeder::class);
        $this->call(datosBancariosSeeder::class);
        $this->call(ProductosSeeder::class);
        $this->call(CompraSeeder::class);
        $this->call(FacturaSeeder::class);


      //  $this->call(ProductosSeeder::class);
    }
}
