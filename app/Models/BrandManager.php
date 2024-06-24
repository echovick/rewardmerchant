<?php

namespace App\Models;

use App\Services\UUIDGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandManager extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'uuid',
        'user_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $uuidGenerator = app(UUIDGenerator::class);
            $model->uuid = $uuidGenerator->generate($model);
        });
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
