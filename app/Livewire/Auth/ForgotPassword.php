<?php

namespace App\Livewire\Auth;

use App\Services\AuthService;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.auth.base')]
class ForgotPassword extends Component
{
    public $email = '';
    public $status = '';

    protected $authService;

    public function boot(AuthService $authService)
    {
        $this->authService = $authService;
    }

    protected $rules = [
        'email' => 'required|email',
    ];

    public function sendLink()
    {
        $this->validate();

        try {
            $status = $this->authService->sendResetLink(['email' => $this->email]);
            $this->status = __($status);
        } catch (ValidationException $e) {
            $this->addError('email', $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}
