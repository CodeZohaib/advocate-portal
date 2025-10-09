<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Client;
use App\Models\CaseRecord;
use Illuminate\Support\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hearing>
 */
class HearingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Random start date within last 6–12 months
        $previousDate = fake()->dateTimeBetween('-1 year', '-1 month');

        // Add realistic 1 to 3 month gap
        $nextDate = (clone $previousDate)->modify('+' . rand(1, 3) . ' months');


        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'client_id' => Client::inRandomOrder()->first()->id,
            'case_id' => CaseRecord::inRandomOrder()->first()->id,
            'previous_date' => Carbon::instance($previousDate)->format('Y-m-d'),
            'next_date' => Carbon::instance($nextDate)->format('Y-m-d'),
            'remarks' => fake()->sentence(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
