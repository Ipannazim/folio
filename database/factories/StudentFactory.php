<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */


class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matric_id' => $faker->unique()->numberBetween(1000000, 9999999),
        'first_name' => $faker->firstname,
        'last_name' => $faker->lastname,
        'email' => $faker->safeEmail,
        'phone_no' => $faker->phoneNumber,
        'created_at' => fake()->dateTime(),
        'updated_at' => fake()->dateTime(),
        ];
    }
}
