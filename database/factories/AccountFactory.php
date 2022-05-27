<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Address;
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
        $name = $this->faker->firstname();
        $surname = $this->faker->lastname();

        return [
            'name' => $name,
            'surname' => $surname,
            'age' => $this->faker->numberBetween(18,60),
            'sex' => $this->faker->randomElement(['male','female']),
            'CPF' => $this->faker->numerify('###.###.###-##'),
            'user_id' => '',
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function(Account $account){
            //$account->address()->create(Address::factory()->make());
            Address::factory()->create([
                'account_id' => $account->id
            ]);
        });

    }
}
