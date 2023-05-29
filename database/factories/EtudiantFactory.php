<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Etudiant;
use App\Models\Ville;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'     => $this->faker->name(),
            'adresse' => $this->faker->address(),
            'telephone' => $this->faker->unique()->e164PhoneNumber(),
            'courriel' => $this->faker->unique()->safeEmail(),
            'date_maissance' => $this->faker->date("Y-m-d"),
            'ville_id'   => Ville::all()->random()->id
        ];
    }
}
