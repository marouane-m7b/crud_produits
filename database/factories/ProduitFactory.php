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
        
    static $refPdtNumber = 4;

    $images = ['photos/tvsmart.png', 'photos/tvsmartlg.png', 'iphone.png'];

    return [
        'RefPdt' => 'P' . str_pad($refPdtNumber++, 3, '0', STR_PAD_LEFT),
        'libPdt' => fake()->word(),
        'Prix' => fake()->numberBetween(100, 10000),
        'Qte' => fake()->numberBetween(1, 20),
        'description' => fake()->sentence(),
        'image' => fake()->randomElement($images),
        'type_id' => fake()->numberBetween(1, 3)
    ];

    }
}
