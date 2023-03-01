<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'age' => $this->faker->numberBetween(18, 65),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'dept_id' => $this->faker->numberBetween(1, 7),
            'sem' => $this->faker->numberBetween(1, 6),
            'div' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E']),
            'mobile' => $this->faker->numberBetween(1000000000, 9999999999),
            'last_school' => $this->faker->company,
            'pfp' => $this->faker->unique()->numberBetween(1, 20) . '.jpg',
            'bloodgroup' => $this->faker->randomElement(['A+', 'B+', 'AB+', 'O+', 'A-', 'B-', 'AB-', 'O-']),
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('12345678'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
