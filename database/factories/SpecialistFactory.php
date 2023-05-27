<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Specialist>
 */
class SpecialistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'crm' => fake()->unique()->regexify('^\d{2}\.\d{3}\.\w{2}$'),
            'specialty' => fake()->randomElement(['oncologia', 'urologia', 'neurologia', 'pediatria', 'ortopedia']),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
