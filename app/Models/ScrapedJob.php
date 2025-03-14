<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScrapedJob extends Model
{
    /** @use HasFactory<\Database\Factories\ScrapedJobFactory> */
    use HasFactory;

    protected $fillable = [
        'title', 'company', 'location', 'description', 'url', 'posted_at', 'source', 'alert_id'
    ];

    public function alert()
    {
        return $this->belongsTo(Alert::class);
    }
}
