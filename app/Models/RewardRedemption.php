<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RewardRedemption extends Model
{
    use HasFactory;

    protected $fillable = [
        'claim_id',
        'vendor_id',
        'redemption_date',
    ];

    public function claim()
    {
        return $this->hasOne(Claim::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
