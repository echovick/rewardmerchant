<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UUIDGenerator
{
    /**
     * Generate a unique UUID for a given model.
     *
     * @param Model $model
     * @param string $uuidField
     * @return string
     */
    public function generate(Model $model, $uuidField = 'uuid'): string
    {
        do {
            $uuid = Str::uuid()->toString();
        } while ($model::where($uuidField, $uuid)->exists());

        return $uuid;
    }
}
