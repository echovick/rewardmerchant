<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignReward extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_id',
        'reward_id'
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function reward()
    {
        return $this->belongsTo(Reward::class);
    }
}
