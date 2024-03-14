<?php

namespace Database\Factories;
use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experiencia>
 */
class ExperienciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $empresas = Empresa::pluck('id')->toArray();
        return [
            'nombre' => $this->faker->sentence(),
            'fechaInicio' => $this->faker->date(),
            'fechaTexto' => $this->faker->date(),
            'descripcion_corta' => $this->faker->paragraph(),
            'precio_por_persona' => $this->faker->randomFloat(2, 10, 100),
            'link' => $this->faker->url(),
            'descripcion_larga' => $this->faker->paragraphs(2, true),
            'empresa_id' => $this->faker->randomElement($empresas),
          
        ];
    }
}
