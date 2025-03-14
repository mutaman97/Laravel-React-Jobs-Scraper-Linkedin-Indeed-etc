<?php

namespace Database\Factories;

use App\Models\Alert;
use App\Models\AlertKeyword;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlertKeywordFactory extends Factory
{
    protected $model = AlertKeyword::class;

    public function definition(): array
    {
        return [
            'alert_id' => Alert::factory(), // Creates an alert for the keyword
            'keyword' => fake()->randomElement([
                'programming',
                'software development',
                'data analysis',
                'cyber security',
                'machine learning',
                'artificial intelligence',
                'web development',
                'mobile app development',
                'database administration',
                'cloud computing'
            ]),
        ];
    }
}
