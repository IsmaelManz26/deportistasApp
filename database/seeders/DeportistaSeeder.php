<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeportistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $deportistas = [
            ['name' => 'Deportista 1', 'deporte' => 'Fútbol', 'edad' => 25, 'altura' => 1.80, 'peso' => 75.0],
            ['name' => 'Deportista 2', 'deporte' => 'Baloncesto', 'edad' => 28, 'altura' => 1.95, 'peso' => 85.0],
            ['name' => 'Deportista 3', 'deporte' => 'Natación', 'edad' => 22, 'altura' => 1.70, 'peso' => 70.0],
            ['name' => 'Deportista 4', 'deporte' => 'Atletismo', 'edad' => 30, 'altura' => 1.75, 'peso' => 65.0],
            ['name' => 'Deportista 5', 'deporte' => 'Ciclismo', 'edad' => 35, 'altura' => 1.85, 'peso' => 80.0],
            ['name' => 'Deportista 6', 'deporte' => 'Tenis', 'edad' => 27, 'altura' => 1.90, 'peso' => 90.0],
            ['name' => 'Deportista 7', 'deporte' => 'Golf', 'edad' => 40, 'altura' => 1.75, 'peso' => 75.0],
            ['name' => 'Deportista 8', 'deporte' => 'Rugby', 'edad' => 32, 'altura' => 1.95, 'peso' => 100.0],
            ['name' => 'Deportista 9', 'deporte' => 'Voleibol', 'edad' => 26, 'altura' => 1.80, 'peso' => 85.0],
            ['name' => 'Deportista 10', 'deporte' => 'Hockey', 'edad' => 29, 'altura' => 1.85, 'peso' => 80.0],
            ['name' => 'Deportista 11', 'deporte' => 'Boxeo', 'edad' => 31, 'altura' => 1.75, 'peso' => 70.0],
            ['name' => 'Deportista 12', 'deporte' => 'Karate', 'edad' => 24, 'altura' => 1.70, 'peso' => 65.0],
            ['name' => 'Deportista 13', 'deporte' => 'Judo', 'edad' => 33, 'altura' => 1.80, 'peso' => 75.0],
            ['name' => 'Deportista 14', 'deporte' => 'Taekwondo', 'edad' => 30, 'altura' => 1.85, 'peso' => 80.0],
            ['name' => 'Deportista 15', 'deporte' => 'Lucha', 'edad' => 28, 'altura' => 1.90, 'peso' => 85.0],
            ['name' => 'Deportista 16', 'deporte' => 'Esgrima', 'edad' => 27, 'altura' => 1.75, 'peso' => 70.0],
            ['name' => 'Deportista 17', 'deporte' => 'Remo', 'edad' => 29, 'altura' => 1.85, 'peso' => 80.0],
            ['name' => 'Deportista 18', 'deporte' => 'Tiro con arco', 'edad' => 26, 'altura' => 1.80, 'peso' => 75.0],
            ['name' => 'Deportista 19', 'deporte' => 'Bádminton', 'edad' => 24, 'altura' => 1.70, 'peso' => 65.0],
            ['name' => 'Deportista 20', 'deporte' => 'Escalada', 'edad' => 30, 'altura' => 1.75, 'peso' => 70.0],
        ];

        DB::table('deportista')->insert($deportistas);
    }
}
