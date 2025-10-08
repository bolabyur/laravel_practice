<?php

namespace Database\Factories;

use App\Models\Teacher;
use Faker\Provider\Lorem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'name' => fake()->randomElement(['Matematika', 'Bahasa Indonesia', 'Bahasa Inggris', 'Web Development', 'PKK','PJOK']),
        ];
    }
}
