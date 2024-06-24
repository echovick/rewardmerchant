<?php

namespace App\Livewire\Components\Auth;

use App\Services\AuthService;
use App\Services\UserService;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegisterForm extends Component
{

    public $user;
    public $password;
    public $password_confirmation;
    public $username;
    public $successMsg;

    protected UserService $userService;
    protected AuthService $authService;

    protected $rules = [
        'password' => 'required|string|confirmed',
        'password_confirmation' => 'required|string',
        'username' => 'required|string|unique:users,username',
    ];

    public function boot(
        UserService $userService,
        AuthService $authService
    ) {
        $this->userService = $userService;
        $this->authService = $authService;
    }

    public function mount($user)
    {
        $this->user = $user;
    }

    public function register()
    {
        $params = [
            'password' => Hash::make($this->password),
            'username' => $this->username,
        ];
        $this->userService->updateUser($params, $this->user['uuid']);
        $this->authService->login($this->user->email, $this->password);
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.components.auth.register-form');
    }
}
