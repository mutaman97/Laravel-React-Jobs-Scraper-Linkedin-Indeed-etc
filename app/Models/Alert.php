<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected $fillable = ['name','user_id', 'country_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function keywords()
    {
        return $this->hasMany(AlertKeyword::class);
    }
}