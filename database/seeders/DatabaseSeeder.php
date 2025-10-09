<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\CaseType;
use App\Models\CourtType;
use App\Models\CaseRecord;
use App\Models\Hearing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Step 1️⃣ Create multiple lawyers (users)
        User::factory(5)->create();

        // Step 2️⃣ Create clients for those lawyers
        Client::factory(30)->create();

        // Step 3️⃣ Create case types (Civil, Criminal, Family, etc.)
        CaseType::factory(6)->create();

        // Step 4️⃣ Create courts (Supreme, High, District, etc.)
        CourtType::factory(5)->create();

        // Step 5️⃣ Create case records (linking users, clients, courts, etc.)
        CaseRecord::factory(25)->create();

        // Step 6️⃣ Create hearings with realistic 1–3 month gaps
        Hearing::factory(50)->create();


        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
