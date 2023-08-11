<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $salary_min = rand(30, 60) * 100000;
        $salary_max = $salary_min + 3000000;

        return [
            'title' => fake()->words(2, true),
            'company' => "PT. " . fake()->words(2, true),
            'description' => fake()->paragraphs(3, true),
            'location' => fake()->word(),
            'salary_min' => $salary_min,
            'salary_max' => $salary_max,
            'job_type' => fake()->randomElement(Job::JOB_TYPE_ENUM),
            'status' => 'upcoming',
            'priority' => fake()->randomElement(Job::PRIORITY_ENUM),
            'note' => fake()->paragraphs(2, true),
            'reference' => fake()->paragraphs(2, true),
        ];
    }
}
