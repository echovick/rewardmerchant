<?php

namespace App\Models;

use App\Services\UUIDGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'description',
        'status',
        'logo',
        'cover_image',
        'created_at',
        'updated_at',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $uuidGenerator = app(UUIDGenerator::class);
            $model->uuid = $uuidGenerator->generate($model);
        });
    }

    public function vendors()
    {
        return $this->hasMany(Vendor::class);
    }

    public function brandManagers()
    {
        return $this->hasMany(BrandManager::class);
    }

    public function campaigns()
    {
        return $this->hasMany(Campaign::class);
    }

    public function rewards()
    {
        return $this->hasMany(Reward::class);
    }
}
