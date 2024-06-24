<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaimForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_id',
        'form_fields',
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
