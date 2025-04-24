<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stagaires>
 */
class StagairesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom'=>fake()->firstName(),
            'prénom'=>fake()->lastName(),
            'email'=>fake()->safeEmail(),
            'phone'=>fake()->phoneNumber(),
            'age'=>fake()->numberBetween(18,30)
        ];
    }
}
