<?php

namespace App\Livewire\Admin\Partners;

use App\Models\Partner;
use App\Services\PartnerService;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.dashboard.base')]
class Edit extends Component
{
    public Partner $partner;

    // fields
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

    // Data
    public $partner_types = [];
    public $available_types = [];

    protected $partnerService;

    public function boot(PartnerService $partnerService)
    {
        $this->partnerService = $partnerService;
    }

    public function mount(Partner $partner)
    {
        $this->partner = $partner;
        $this->partner_name = $partner->partner_name;
        $this->organization_name = $partner->organization_name;
        $this->partner_email = $partner->partner_email;
        $this->partner_phone = $partner->partner_phone;
        $this->address_line_1 = $partner->address_line_1;
        $this->address_line_2 = $partner->address_line_2;
        $this->city = $partner->city;
        $this->state = $partner->state;
        $this->country = $partner->country;
        $this->pincode = $partner->pincode;

        $this->available_types = \App\Models\PartnerType::all();
        $this->partner_types = $partner->partnerTypes->pluck('id')->toArray();
    }

    public function rules()
    {
        return [
            'partner_name' => 'required|string|max:255',
            'organization_name' => 'required|string|max:255',
            'partner_email' => 'required|email|max:255|unique:partners,partner_email,' . $this->partner->id,
            'partner_phone' => 'nullable|string|max:20',
            'address_line_1' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'pincode' => 'required|digits:6|numeric',
        ];
    }

    public function save()
    {
        $this->validate();

        try {
            $data = [
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

            $this->partnerService->updatePartner($this->partner, $data);

            session()->flash('success', 'Partner updated successfully.');
            return redirect(route('admin.partners.index'));
        } catch (\Exception $e) {
            $this->addError('partner_name', 'Failed to update partner: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.admin.partners.edit');
    }
}
