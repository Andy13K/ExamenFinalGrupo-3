<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnosTableSeeder extends Seeder
{
    public function run()
    {
        Alumno::factory()->count(100)->create();
    }
}
