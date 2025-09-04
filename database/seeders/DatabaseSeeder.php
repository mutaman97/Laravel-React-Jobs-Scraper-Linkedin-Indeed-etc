<?php

namespace Database\Seeders;

use App\Models\Alert;
use App\Models\AlertKeyword;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // First seed countries
        $this->call(CountrySeeder::class);

        // Create 10 users
        $users = User::factory(10)->create();

        // Create 5 alerts with random keywords for each user
        $users->each(function ($user) {
            $alerts = Alert::factory()->count(3)->create(['user_id' => $user->id]);

            // Create keywords for each alert
            $alerts->each(function ($alert) {
                AlertKeyword::factory()->count(3)->create(['alert_id' => $alert->id]);
            });
        });
    }
}
