<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacancy>
 */
class VacancyFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'image' => fake()->imageUrl(640, 640),
            'company' => fake()->name(),
            'location' => fake()->city(),
            'email' => fake()->unique()->safeEmail(),
            'description' => fake()->text(200),
            'min_pay' => fake()->numberBetween(0, 400),
            'max_pay' => fake()->numberBetween(300, 900),
            'user_id' => 1,
        ];
    }
}
