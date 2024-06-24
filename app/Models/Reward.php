<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'type',
        'details',
        'uuid',
        'expiration_date',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function campaigns()
    {
        return $this->hasMany(CampaignReward::class);
    }

    public function claims()
    {
        return $this->hasMany(Claim::class);
    }
}
