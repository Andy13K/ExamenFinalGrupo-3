<?php
// database/factories/AlumnoFactory.php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    protected $model = Alumno::class;

    public function definition()
    {
        return [
            'carne' => $this->faker->unique()->bothify('????-#####'),
            'nombre' => $this->faker->name,
            'correo_institucional' => $this->faker->unique()->safeEmail,
            'telefono' => $this->faker->phoneNumber,
        ];
    }
}
