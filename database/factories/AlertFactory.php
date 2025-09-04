<?php

namespace Database\Factories;

use App\Models\Alert;
use App\Models\User;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlertFactory extends Factory
{
    protected $model = Alert::class;

    public function definition(): array
    {
        $countryId = Country::where('code', 'AE')->first()->id;

        return [
            'user_id' => User::factory(), // Create a user if not provided
            'country_id' => $countryId,
            'name' => $this->faker->sentence(3), // Random alert name
        ];
    }
}
