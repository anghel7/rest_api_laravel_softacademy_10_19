<?php

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            "nombre"=>"Moises",
            "apellido"=>"Ramoa",
            "direccion"=>"Av. Uyuni 270",
            "telefono"=>"7859686",
            "email"=>"m.ramos@gmail.com",
            "fecha_nacimiento"=>"1990-12-21"
        ]);
        Cliente::create([
            "nombre"=>"Nelson",
            "apellido"=>"Morante",
            "direccion"=>"Av. Panamericana",
            "telefono"=>"6768576",
            "email"=>"n.morante@gmail.com",
            "fecha_nacimiento"=>"1985-07-13"
        ]);
    }
}
