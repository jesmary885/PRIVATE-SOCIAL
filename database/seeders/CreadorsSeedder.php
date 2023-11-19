<?php

namespace Database\Seeders;

use App\Models\Creador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreadorsSeedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Creador::create([
            'user_id' => '1',
            'documento_id' => '58966541',
            'valor' => '10$',
            'retiro_pendiente' => '25$',
            'visualizacion_todos' => 'si',
            'estado_verificacion' => 'completada',
            'banner'=> 'banners/usuario1.jpg'
        ]);

        Creador::create([
            'user_id' => '2',
            'documento_id' => '58966541',
            'valor' => '10$',
            'retiro_pendiente' => '25$',
            'visualizacion_todos' => 'si',
            'estado_verificacion' => 'completada',
            'banner'=> 'banners/usuario2.jpg'
        ]);
        Creador::create([
            'user_id' => '3',
            'documento_id' => '58966541',
            'valor' => '10$',
            'retiro_pendiente' => '25$',
            'visualizacion_todos' => 'si',
            'estado_verificacion' => 'completada',
            'banner'=> 'banners/usuario3.jpg'
        ]);
        Creador::create([
            'user_id' => '4',
            'documento_id' => '58966541',
            'valor' => '10$',
            'retiro_pendiente' => '25$',
            'visualizacion_todos' => 'si',
            'estado_verificacion' => 'completada',
            'banner'=> 'banners/usuario4.jpg'
        ]);
        Creador::create([
            'user_id' => '5',
            'documento_id' => '58966541',
            'valor' => '10$',
            'retiro_pendiente' => '25$',
            'visualizacion_todos' => 'si',
            'estado_verificacion' => 'completada',
            'banner'=> 'banners/usuario5.jpg'
        ]);
    }
}
