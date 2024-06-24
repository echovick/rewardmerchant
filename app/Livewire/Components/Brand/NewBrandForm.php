<?php

namespace App\Livewire\Components\Brand;

use App\Mail\BrandCreatedMail;
use App\Services\BrandManagerService;
use App\Services\BrandService;
use App\Services\UserService;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class NewBrandForm extends Component
{
    use WithFileUploads;

    public $appUrl = 'http://127.0.0.1:8000';
    public $name;
    public $logo;
    public $cover;
    public $description;
    public $manager_name;
    public $manager_email;
    public $successMsg;
    public $errorMsg;

    protected BrandService $brandService;
    protected UserService $userService;
    protected BrandManagerService $brandManagerService;

    protected $rules = [
        'name' => 'required|string|max:255',
        'logo' => 'required|image|max:1024', // 1MB Max
        'cover' => 'required|image|max:1024', // 1MB Max
        'description' => 'required|string|max:1000',
        'manager_name' => 'required|string|max:255',
        'manager_email' => 'required|email|max:255',
    ];

    public function boot(
        BrandService $brandService,
        UserService $userService,
        BrandManagerService $brandManagerService
    ){
        $this->brandService = $brandService;
        $this->userService = $userService;
        $this->brandManagerService = $brandManagerService;
    }

    public function submit()
    {
        $this->validate();

        $logoPath = $this->logo->store('logos', 'public');
        $coverPath = $this->cover->store('covers', 'public');
        $params = $this->only('name', 'description');
        $params['logo'] = $logoPath;
        $params['cover_image'] = $coverPath;

        $brand = $this->brandService->saveBrand($params);

        $userParams = $this->getUserParams();
        $user = $this->userService->createUser($userParams);

        $brandManagerParams = $this->getBrandManagerParams($brand, $user);
        $this->brandManagerService->createBrandManager($brandManagerParams);

        $url = $this->appUrl . '/auth/register/' . $user->uuid;
        Mail::to($this->manager_email)->send(new BrandCreatedMail($this->manager_name, $this->name, $url));

        $this->reset();
        $this->successMsg = "Brand created successfully, Email have beens sent to brand manager.";
    }

    public function getUserParams(): array
    {
        return [
            'user_type' => 'brand_manager',
            'name' => $this->manager_name,
            'email' => $this->manager_email,
        ];
    }

    public function getBrandManagerParams($brand, $user): array
    {
        return [
            'brand_id' => $brand->id,
            'user_id' => $user->id,
        ];
    }

    public function render()
    {
        return view('livewire.components.brand.new-brand-form');
    }
}
