<?php
namespace App\Services;

use App\Models\BrandManager;

class BrandManagerService
{
    public function createBrandManager(array $params): BrandManager
    {
        return BrandManager::create($params);
    }
}
