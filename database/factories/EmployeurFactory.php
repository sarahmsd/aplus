<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::factory()->create();
        return [
            'user_id' => $user->id,
            'nom' => $user->name,
            'email' => $user->email,
            'tel' => $this->faker->phoneNumber(),
            'adress' => $this->faker->address(),
            'domaineActivité' => 'Achats',
            'description' => $this->faker->text(100),
            'photo' => '',
        ];
    }
}
