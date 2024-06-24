<?php

namespace App\Livewire\Components\Auth;

use App\Services\AuthService;
use Livewire\Component;

class LoginForm extends Component
{
    public $email;
    public $password;
    public $emailInputFocus;
    public $passwordInputFocus;
    public $errorMsg;
    public $successMsg;

    protected AuthService $authService;

    protected $rules = [
        'password' => 'required|string|min:6',
        'email' => 'required|email',
    ];

    public function boot(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function onEmailInputFocus()
    {
        $this->emailInputFocus = true;
    }

    public function onPasswordInputFocus()
    {
        $this->passwordInputFocus = true;
    }

    public function login()
    {
        $this->validate();
        $res = $this->authService->login($this->email, $this->password);
        if (!$res['status']) {
            $this->setMessage($res);
            return;
        }
        $this->authService->redirectToDashboard();
    }

    public function setMessage($res)
    {
        if ($res['status'] == false) {
            $this->errorMsg = $res['message'];
            return;
        }
        $this->successMsg = $res['message'];
    }

    public function render()
    {
        return view('livewire.components.auth.login-form');
    }
}
