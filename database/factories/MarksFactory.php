<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Marks>
 */
class MarksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'stud_id' => $this->faker->numberBetween(0, 24),
            'exam_date' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'Soodam' => $this->faker->numberBetween(1, 100),
            'BS' => $this->faker->numberBetween(1, 100),
            'Laravel' => $this->faker->numberBetween(1, 100),
            'PE' => $this->faker->numberBetween(1, 100),
            'Java' => $this->faker->numberBetween(1, 100),
            'total' => function (array $attributes) {
                return $attributes['Soodam'] + $attributes['BS'] + $attributes['Laravel'] + $attributes['PE'] + $attributes['Java'];
            },
            'percent' => function (array $attributes) {
                return ($attributes['total'] / 500) * 100;
            },
            'grade' => function (array $attributes) {
                $percent = $attributes['percent'];
                if ($percent >= 91) {
                    return "A";
                } elseif ($percent >= 81 && $percent < 90) {
                    return "B";
                } elseif ($percent >= 71 && $percent < 80) {
                    return "C";
                } elseif ($percent >= 60 && $percent < 70) {
                    return "D";
                } else {
                    return "E";
                }
            },
            'created_at' => now(),
            'updated_at' => now(),
            ];
    }
}
