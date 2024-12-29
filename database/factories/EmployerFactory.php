<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */



    public function definition(): array
    {
        static $ci = 1;
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'ci' => $ci++
        ];
    }

   
}
