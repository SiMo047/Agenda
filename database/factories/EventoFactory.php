<?php

namespace Database\Factories;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categorias = Categoria::pluck('id')->toArray();
        return [
            'nombre' => $this->faker->sentence(),
            'fecha' => $this->faker->dateTimeBetween('+1 week', '+1 month'),
            'hora' => $this->faker->time(),
            'descripcion' => $this->faker->paragraph(),
            'ciudad' => $this->faker->city(),
            'direccion' => $this->faker->address(),
            'estado' => $this->faker->randomElement(['creado', 'cancelado', 'terminado']),
            'aforomax' => $this->faker->numberBetween(50, 1000),
            'tipo' => $this->faker->randomElement(['creado', 'online']),
            'numMaxEntradasPorPersona' => $this->faker->numberBetween(1, 10),
            'categoria_id' => $this->faker->randomElement($categorias),
            
        ];
    }
}
