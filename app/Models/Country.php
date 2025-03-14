<?php

namespace App\Models;

use App\Enums\CountryStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /** @use HasFactory<\Database\Factories\CountryFactory> */
    use HasFactory;

    protected $fillable = [
        'name', 'code', 'status'
    ];

    protected function casts(): array
    {
        return [
            'status' => CountryStatus::class,
        ];
    }
}
