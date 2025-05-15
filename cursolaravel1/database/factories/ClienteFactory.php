<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=cliente::class;
    public function definition()
    {
        return [
         'ci'=>$this->faker->unique()->randomNumber,
         'nombres'=>$this->faker->name(),
         'paterno'=>$this->faker->firstName(),
         'materno'=>$this->faker->lastName(),
         'direccion'=>$this->faker->address(), 
         'telefono'=>$this->faker->randomNumber(8,true),
        ];
    }
}
