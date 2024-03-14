<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       
        return [
            'nombre'=>$this->faker->company(),
            'direccion'=>$this->faker->streetAddress(),
            'telefono'=>$this->faker->phoneNumber() ,
            'email'=>$this->faker->email(),
            'web'=>$this->faker->domainName(),
            'info_extra'=>$this->faker->sentence(),
        ];
    }
}
