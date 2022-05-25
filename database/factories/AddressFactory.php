<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'street' => $this->faker->name(),
            'number' => $this->faker->numberBetween(1,1000),
            'district' => $this->faker->name(),
            'city' => $this->faker->name(),
            'state' => $this->faker->name(),
            'country' => $this->faker->name(),
            'zip_code' => $this->faker->randomNumber(8),
            'account_id' => ''

        ];
    }
}
