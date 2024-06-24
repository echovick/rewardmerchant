<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'name',
        'uuid',
        'start_date',
        'end_date',
        'rules',
        'landing_page',
        'status',
        'created_by',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function claimForm()
    {
        return $this->hasOne(ClaimForm::class);
    }

    public function rewards()
    {
        return $this->hasMany(CampaignReward::class);
    }

    public function vendors()
    {
        return $this->hasMany(CampaignVendor::class);
    }

    public function claims()
    {
        return $this->hasMany(Claim::class);
    }
}
