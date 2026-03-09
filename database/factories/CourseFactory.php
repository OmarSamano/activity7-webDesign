<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'key' => 'Rob' . $this->faker->numberBetween(100, 999), // Ej. Rob105
            'title' => $this->faker->sentence(3), // Título falso de 3 palabras
            'cover' => $this->faker->imageUrl(640, 480, 'robotics', true),
            'content' => $this->faker->paragraph(4),
            'kit_id' => $this->faker->numberBetween(1, 3), // Asigna aleatoriamente uno de los 3 kits
        ];
    }
}
