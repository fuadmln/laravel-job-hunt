<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Step>
 */
class StepFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start_date = date("Y-m-d");
        $due_date_range = rand(2, 14);
        $due_date = date("Y-m-d", strtotime($start_date." +$due_date_range days"));
        $schedule_date_range = rand(0, $due_date_range);
        $schedule_date  = date("Y-m-d", strtotime($start_date." +$schedule_date_range days"));
        

        return [
            'job_id' => Job::inRandomOrder()->value('id'),
            'name' => fake()->sentence(4),
            'description' => fake()->paragraphs(3, true),
            'start_date' => $start_date, 
            'due_date' => $due_date, 
            'schedule_date' => $schedule_date,
            'status' => 'upcoming',
            'note' => fake()->paragraphs(4, true), 
            'review' => fake()->paragraphs(6, true),
        ];
    }
}
