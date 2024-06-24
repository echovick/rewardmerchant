<?php
namespace App\Services;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Collection;

class BrandService
{
    public function saveBrand(array $params): Brand
    {
        return Brand::create($params);
    }

    public function getBrands(): ?Collection
    {
        return Brand::all();
    }
}
