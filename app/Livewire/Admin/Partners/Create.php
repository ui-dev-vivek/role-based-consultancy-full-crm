<?php

namespace App\Livewire\Admin\Partners;

use App\Models\Partner;
use App\Services\PartnerService;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Validation\Rule;

#[Layout('components.layouts.dashboard.base')]
class Create extends Component
{
    // Partner Fields
    public $partner_name = '';
    public $organization_name = '';
    public $partner_email = '';
    public $partner_phone = '';
    public $address_line_1 = '';
    public $address_line_2 = '';
    public $city = '';
    public $state = '';
    public $country = '';
    public $pincode = '';

    // User Fields
    public $email = '';
    public $password = '';
    public $password_confirmation = '';

    // Data
    public $partner_types = [];
    public $available_types = [];

    protected $partnerService;

    public function mount()
    {
        $this->available_types = \App\Models\PartnerType::all();
    }

    public function boot(PartnerService $partnerService)
    {
        $this->partnerService = $partnerService;
    }

    public function rules()
    {
        return [
            // Partner Details
            'partner_name' => 'required|string|max:255',
            'organization_name' => 'required|string|max:255',
            'partner_email' => 'required|email|max:255|unique:partners,partner_email',
            'partner_phone' => 'nullable|string|max:20',
            'address_line_1' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'pincode' => 'required|digits:6|numeric',

            // Account Details
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ];
    }

    public function save()
    {
        $this->validate();

        try {
            $partnerData = [
                'partner_name' => $this->partner_name,
                'organization_name' => $this->organization_name,
                'partner_email' => $this->partner_email,
                'partner_phone' => $this->partner_phone,
                'address_line_1' => $this->address_line_1,
                'address_line_2' => $this->address_line_2,
                'city' => $this->city,
                'state' => $this->state,
                'country' => $this->country,
                'pincode' => $this->pincode,
                'partner_types' => $this->partner_types,
            ];

            $userData = [
                'email' => $this->email,
                'password' => $this->password,
            ];

            $this->partnerService->createPartner($partnerData, $userData);

            session()->flash('success', 'Partner created successfully.');
            return redirect()->route('admin.partners.index');
        } catch (\Exception $e) {
            $this->addError('email', 'Failed to create partner: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.admin.partners.create');
    }
}
