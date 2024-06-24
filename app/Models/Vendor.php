<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'name',
        'email',
        'contact_name',
        'uuid',
        'contact_phone',
        'address',
        'status',
        'vendor_rep_id',
        'logo',
        'cover',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function redemptions()
    {
        return $this->hasMany(RewardRedemption::class);
    }

    public function campaigns()
    {
        return $this->hasMany(CampaignVendor::class);
    }

    public function vendorReps()
    {
        return $this->hasMany(VendorRep::class);
    }
}
