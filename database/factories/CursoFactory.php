<?php

namespace Database\Factories;
use App\Models\Curso;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class CursoFactory extends Factory
{


    protected $model = Curso::class;
    /**
     * Define the model's default state.
     *

     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'jornada_id' =>$this->faker->randomElement(['1','2']),
            'teacher_id' =>$this->faker->randomElement(['1','2','3','4','5','6','7','8','9','10','11']),
            'nivel_id' =>$this->faker->randomElement(['1','2'])

        ];
    }
}
