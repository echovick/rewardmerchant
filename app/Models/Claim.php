<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'campaign_id',
        'reward_id',
        'status',
        'claim_details',
        'proof',
        'tracking_id',
        'qr_code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'customer_id', 'id');
    }

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function reward()
    {
        return $this->belongsTo(Reward::class);
    }

    public function redemption()
    {
        return $this->hasOne(RewardRedemption::class);
    }
}
