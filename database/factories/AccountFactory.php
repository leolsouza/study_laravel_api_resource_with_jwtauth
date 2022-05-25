<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name();
        $surname = $this->faker->surname();

        return [
            'name' => $name,
            'surname' => $surname,
            'age' => $this->faker->numberBetween(18,60),
            'sex' => $this->faker->randomElement(['male','female']),
            'CPF' => $this->faker->randomNumber(11),
        ];
    }
}
