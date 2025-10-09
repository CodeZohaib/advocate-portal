<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourtType>
 */
class CourtTypeFactory extends Factory
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
            'name' => fake()->randomElement([
                'Supreme Court', 'High Court', 'District Court', 'Civil Court', 'Family Court'
            ]),
        ];
    }
}
