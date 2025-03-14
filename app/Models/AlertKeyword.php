<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlertKeyword extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected $fillable = ['alert_id', 'keyword'];

    public function alert()
    {
        return $this->belongsTo(Alert::class);
    }
}
