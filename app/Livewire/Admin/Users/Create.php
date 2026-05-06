<?php

namespace App\Livewire\Admin\Users;

use App\Models\Role;
use App\Services\UserService;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.dashboard.base')]
class Create extends Component
{
    // User Account Data
    public $email = '';
    public $password = '';
    public $user_type = '';
    public $status = 'active';
    public $roles = [];

    // Profile Data
    public $first_name = '';
    public $last_name = '';
    public $phone_no = '';
    public $address_line_1 = '';
    public $address_line_2 = '';
    public $city = '';
    public $state = '';
    public $country = '';
    public $pincode = '';

    protected $userService;

    public function boot(UserService $userService)
    {
        $this->userService = $userService;
    }

    protected function rules()
    {
        return [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'user_type' => 'required|in:core,sales,partner',
            'status' => 'required|in:active,inactive',
            'roles' => 'array',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_no' => 'required|string|max:20',
            'address_line_1' => 'nullable|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'pincode' => 'nullable|integer',
        ];
    }

    public function save()
    {
        if (!auth()->user()->hasPermission('can_create_user')) {
            abort(403);
        }

        $this->validate();

        try {
            $userData = [
                'email' => $this->email,
                'password' => $this->password,
                'user_type' => $this->user_type,
                'status' => $this->status,
            ];

            $profileData = [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'phone_no' => $this->phone_no,
                'address_line_1' => $this->address_line_1 ?: null,
                'address_line_2' => $this->address_line_2 ?: null,
                'city' => $this->city ?: null,
                'state' => $this->state ?: null,
                'country' => $this->country ?: null,
                'pincode' => $this->pincode ?: null,
            ];

            $this->userService->createUserWithProfile($userData, $profileData, $this->roles);

            session()->flash('success', 'User created successfully!');
            return redirect()->route('admin.users.index');
        } catch (\Exception $e) {
            $this->addError('general', 'Failed to create user: ' . $e->getMessage());
        }
    }

    public function render()
    {
        $allRoles = Role::all();
        return view('livewire.admin.users.create', [
            'allRoles' => $allRoles
        ]);
    }
}
