<?php
namespace App\Services;

use App\Traits\ServiceResponse;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    protected UserService $userService;

    use ServiceResponse;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function login(string $email, $password): array
    {
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = $this->userService->getUserByEmail($email);
            Auth::login($user);
            return $this->successResponse("Login successful");
        }
        return $this->errorResponse("Incorrect Credentials");
    }

    public function redirectToDashboard()
    {
        if (!$this->isLoggedIn()) {
            return $this->errorResponse("Unauthorized!");
        }
        switch (Auth::user()->user_type) {
            case 'super_admin':
                return redirect()->route('admin.dashboard');
                break;
            case 'brand_manager':
                return redirect()->route('brand.dashboard');
                break;
            case 'customer':
                return redirect()->route('customer.dashboard');
                break;
            case 'vendor_rep':
                return redirect()->route('vendor.dashboard');
                break;
        }
    }

    public function isLoggedIn(): bool
    {
        if (!Auth::check()) {
            return false;
        }
        return true;
    }
}
