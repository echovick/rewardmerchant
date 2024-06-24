<?php

namespace App\Livewire\Components\Brand;

use App\Services\BrandService;
use Livewire\Component;

class BrandList extends Component
{
    public $data;

    protected BrandService $brandService;

    public function boot(
        BrandService $brandService
    ) {
        $this->brandService = $brandService;
    }

    public function mount()
    {
        $this->data['brands'] = $this->brandService->getBrands();
    }

    public function render()
    {
        return view('livewire.components.brand.brand-list');
    }
}
