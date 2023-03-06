<?php

namespace Database\Factories;

use App\Models\Employeur;
use App\Models\Offre;
use Faker\Core\DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class OffreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employeur' => 7,
            'nom' => $this->faker->name,
            'description' => $this->faker->text(100),
            'dateLimite' => "2023-10-09",
            'contrat_type' => 1,
        ];
    }

}
