<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Developer;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeveloperFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Developer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'apellido' =>$this->faker->lastName,
            'telefono' => $this->faker->phoneNumber,
            'cargo' => '',
        ];
    }
}
