<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactMe>
 */
class ContactMeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //

            'title' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'name' =>  $this->faker->name($gender = 'male'|'female'),
            'email' =>  $this->faker->freeEmail(),
            'description' => $this->faker->text($maxNbChars = 200),

        ];
    }
}
