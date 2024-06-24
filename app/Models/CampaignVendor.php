<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignVendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_id',
        'vendor_id',
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
