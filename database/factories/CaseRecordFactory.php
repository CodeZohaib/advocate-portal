<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Client;
use App\Models\CaseType;
use App\Models\CourtType;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CaseRecord>
 */
class CaseRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'laywer_id' => User::inRandomOrder()->first()->id,
            'client_id' => Client::inRandomOrder()->first()->id,
            'case_type_id' => CaseType::inRandomOrder()->first()->id,
            'court_type_id' => CourtType::inRandomOrder()->first()->id,
            'case_number' => 'C-' . fake()->unique()->numberBetween(1000, 9999),
            'on_behalf' => fake()->randomElement(['petitioner', 'respondent']),
            'section' => 'Section ' . fake()->numberBetween(100, 500),
            'judge_name' => fake()->name(),
            'status' => fake()->randomElement(['open', 'closed', 'inactive']),
            'filed_date' => fake()->date(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
