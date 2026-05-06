<?php

namespace App\Livewire\Auth;

use App\Services\AuthService;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.auth.base')]
class Login extends Component
{
    public $email = '';
    public $password = '';
    public $remember = false;

    protected $authService;

    public function boot(AuthService $authService)
    {
        $this->authService = $authService;
    }

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function login()
    {
        $this->validate();

        try {
            $this->authService->login([
                'email' => $this->email,
                'password' => $this->password
            ], $this->remember);

            return redirect()->intended('/dashboard');
        } catch (ValidationException $e) {
            $this->addError('email', $e->getMessage());
            // Or throw $e; to let Livewire handle it if mapped to properties correctly,
            // but AuthService throws generic message often keyed 'email'.
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
