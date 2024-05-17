<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom"=>$this->faker->word(),
            "description" =>$this->faker->words(10, true),
            "categorie" =>$this->faker->word(),
            "prix" =>$this->faker->randomFloat(2, 0, 200),
            "image" =>$this->faker->word(),
        ];
    }
}
