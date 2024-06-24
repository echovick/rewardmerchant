<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\AuthService;

class AuthController extends Controller
{
    protected AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login()
    {
        if ($this->authService->isLoggedIn()) {
            return $this->authService->redirectToDashboard();
        }
        return view('pages.auth.login');
    }

    public function register($uuid)
    {
        $user = User::where('uuid', $uuid)->first();
        return view('pages.auth.register', compact('user'));
    }
}
