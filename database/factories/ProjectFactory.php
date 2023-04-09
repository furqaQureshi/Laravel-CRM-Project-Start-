<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "client_id" => fake()->rand(0,10),
            "manager_id" => fake()->rand(0,10),
            "status_id" => fake()->rand(0,3),
            "title" => fake()->title(),
            "daadline" => fake()->date(),
            "description" => fake()->text()
        ];
    }
}
