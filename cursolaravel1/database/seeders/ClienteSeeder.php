<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'ci' => Str::random(10),
            'nombre' => Str::random(15),
            'paterno' => Str::random(15),
            'materno' =>  Str::random(15),
            'direccion' =>  Str::random(30),
            'telefono' =>  Str::random(8),
        ]);
    }
}
