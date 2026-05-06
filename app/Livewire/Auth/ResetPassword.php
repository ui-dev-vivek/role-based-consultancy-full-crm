<?php

namespace App\Livewire\Auth;

use App\Services\AuthService;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.auth.base')]
class ResetPassword extends Component
{
    public $token;
    public $email;
    public $password = '';
    public $password_confirmation = '';

    protected $authService;

    public function boot(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function mount($token)
    {
        $this->token = $token;
        $this->email = request()->query('email');
    }

    protected $rules = [
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed|min:8',
    ];

    public function resetPassword()
    {
        $this->validate();

        try {
            $status = $this->authService->resetPassword([
                'email' => $this->email,
                'password' => $this->password,
                'password_confirmation' => $this->password_confirmation,
                'token' => $this->token,
            ]);

            return redirect()->route('login')->with('status', __($status));
        } catch (ValidationException $e) {
            $this->addError('email', $e->getMessage());
            $this->addError('password', $e->getMessage()); // AuthService might attach error to different keys
        }
    }

    public function render()
    {
        return view('livewire.auth.reset-password');
    }
}
