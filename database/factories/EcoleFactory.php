<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EcoleFactory extends Factory
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
            'sigle' => $user->name,
            'description' => $this->faker->text(100),
            'user_id' => $user->id,
            'ecole' => $this->faker->unique()->text(49),
            'adresse' => $this->faker->address(),
            'etablissement' => 'prive',
            'siteWeb' => 'www.ecole.com',
            'linkedin' => 'http://linkedin',
            'systemeEducatif_id' => 1,
            'email' => $user->email,
            'telephone' => $this->faker->phoneNumber(),
        ];
    }
}
