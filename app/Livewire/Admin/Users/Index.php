<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use App\Services\UserService;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

#[Layout('components.layouts.dashboard.base')]
class Index extends Component
{
    use WithPagination;

    public $search = '';

    protected $queryString = ['search' => ['except' => '']];

    protected $userService;

    // We can't inject into mount directly for actions usually, but for render/mount yes.
    // Ideally usage of service should be in actions. 
    // Livewire v3 allows injection in actions.

    public function boot(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function delete($userId)
    {
        if (!auth()->user()->hasPermission('can_create_user')) {
            $this->dispatch('notify', variant: 'error', message: 'Unauthorized action.');
            return;
        }

        try {
            $user = User::findOrFail($userId);
            // Re-use the service logic or call it
            // Since service is injected in boot, we can use $this->userService
            // Note: In Livewire, properties are not persisted between requests in the same way, 
            // but boot runs on every request.

            $this->userService->deleteUser($user);

            $this->dispatch('notify', variant: 'success', message: 'User deleted successfully.');
        } catch (\Exception $e) {
            $this->dispatch('notify', variant: 'error', message: 'Failed to delete user.');
        }
    }

    public function render()
    {
        $users = User::with(['roles', 'profile'])
            ->where(function ($query) {
                $query->where('email', 'like', '%' . $this->search . '%')
                    ->orWhereHas('profile', function ($q) {
                        $q->where('first_name', 'like', '%' . $this->search . '%')
                            ->orWhere('last_name', 'like', '%' . $this->search . '%');
                    });
            })
            ->latest()
            ->paginate(10);

        return view('livewire.admin.users.index', [
            'users' => $users
        ]);
    }
}
