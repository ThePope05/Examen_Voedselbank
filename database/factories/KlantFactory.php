<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Klant>
 */
class KlantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'naam' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'telefoonnummer' => $this->faker->phoneNumber,
            'adres' => $this->faker->address,
            'volwassenen' => $this->faker->numberBetween(1, 3),
            'kinderen' => $this->faker->numberBetween(0, 3),
            'babies' => $this->faker->numberBetween(0, 2),
        ];
    }
}
