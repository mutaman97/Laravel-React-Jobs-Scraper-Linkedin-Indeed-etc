<?php

namespace Database\Factories;

use App\Models\Alert;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlertFactory extends Factory
{
    protected $model = Alert::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // Create a user if not provided
            'name' => $this->faker->sentence(3), // Random alert name
        ];
    }
}
