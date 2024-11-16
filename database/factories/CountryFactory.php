<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Country::class;

    public function definition(): array
    {
        return [
            'name' => fake()->country(),
            'countryCode' => fake()->countryISOAlpha3()
        ];
    }
}
