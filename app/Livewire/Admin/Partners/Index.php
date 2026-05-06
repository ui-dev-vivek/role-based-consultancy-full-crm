<?php

namespace App\Livewire\Admin\Partners;

use App\Models\Partner;
use App\Services\PartnerService;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.layouts.dashboard.base')]
class Index extends Component
{
    use WithPagination;

    public $search = '';

    protected $partnerService;

    public function boot(PartnerService $partnerService)
    {
        $this->partnerService = $partnerService;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function delete($partnerId)
    {
        if (!auth()->user()->hasPermission('can_block_partner')) {
            $this->dispatch('notify', variant: 'error', message: 'Unauthorized action. Only admins can block partners.');

            return;
        }

        try {
            $partner = Partner::findOrFail($partnerId);
            $this->partnerService->deletePartner($partner);
            $this->dispatch('notify', variant: 'success', message: 'Partner blocked successfully.');
        } catch (\Exception $e) {
            $this->dispatch('notify', variant: 'error', message: 'Failed to block partner.');
        }
    }

    public function render()
    {
        $query = Partner::query();

        $user = auth()->user();

        if ($user->hasRole('Sales Executive')) {
            $query->where('created_by_user_id', $user->id);
        };
        $partners = $query->with(['creator', 'users'])
            ->where(function ($query) {
                $query->where('partner_name', 'like', '%' . $this->search . '%')
                    ->orWhere('organization_name', 'like', '%' . $this->search . '%')
                    ->orWhere('partner_email', 'like', '%' . $this->search . '%');
            })
            ->latest()
            ->paginate(10);
        // dd($partners);
        return view('livewire.admin.partners.index', [
            'partners' => $partners
        ]);
    }
}
