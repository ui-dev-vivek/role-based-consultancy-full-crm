<div class="max-w-7xl mx-auto">
    <x-ui.page-header title="User Management" subtitle="Manage your application users and their roles">
        <x-slot name="actions">
            <x-ui.button href="{{ route('admin.users.create') }}" icon="fas fa-plus">
                Add User
            </x-ui.button>
        </x-slot>
    </x-ui.page-header>

    @if (session('success'))
        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-xl">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-6">
        <x-forms.ui.input name="search" label="" placeholder="Search users by name or email..."
            wire:model.live="search" icon="fas fa-search" />
    </div>

    <x-ui.card padding="p-0">
        <x-ui.table :headers="['User', 'Email', 'Type', 'Status', 'Roles', 'Actions']">
            @forelse($users as $user)
                <x-ui.table.row wire:key="user-{{ $user->id }}">
                    <x-ui.table.cell>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 rounded-xl bg-primary-50 text-primary-600 flex items-center justify-center font-bold text-sm ring-1 ring-primary-100 shadow-sm group-hover:scale-110 transition-transform">
                                {{ strtoupper(substr($user->email, 0, 2)) }}
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-semibold text-slate-900">
                                    {{ $user->profile?->first_name ?? 'N/A' }}
                                    {{ $user->profile?->last_name ?? '' }}</p>
                            </div>
                        </div>
                    </x-ui.table.cell>
                    <x-ui.table.cell>
                        <span class="text-sm text-slate-600">{{ $user->email }}</span>
                    </x-ui.table.cell>
                    <x-ui.table.cell>
                        <x-ui.badge variant="info">
                            {{ ucfirst($user->user_type) }}
                        </x-ui.badge>
                    </x-ui.table.cell>
                    <x-ui.table.cell>
                        <x-ui.badge :variant="$user->status === 'active' ? 'success' : 'error'">
                            {{ ucfirst($user->status) }}
                        </x-ui.badge>
                    </x-ui.table.cell>
                    <x-ui.table.cell>
                        <div class="flex flex-wrap gap-1">
                            @foreach ($user->roles as $role)
                                <x-ui.badge variant="secondary" size="sm">
                                    {{ $role->role_name }}
                                </x-ui.badge>
                            @endforeach
                        </div>
                    </x-ui.table.cell>
                    <x-ui.table.cell class="text-right">
                        <div class="flex items-center justify-end space-x-2">
                            <x-ui.button href="{{ route('admin.users.edit', $user->id) }}" variant="ghost"
                                size="sm" icon="fas fa-edit" />

                            <x-ui.button wire:click="delete({{ $user->id }})"
                                wire:confirm="Are you sure you want to delete this user?" variant="ghost" size="sm"
                                icon="fas fa-trash" class="text-rose-600 hover:text-rose-700 hover:bg-rose-50" />
                        </div>
                    </x-ui.table.cell>
                </x-ui.table.row>
            @empty
                <tr>
                    <td colspan="6" class="px-6 py-12 text-center">
                        <div class="flex flex-col items-center">
                            <div class="w-16 h-16 bg-slate-100 rounded-2xl flex items-center justify-center mb-4">
                                <i class="fas fa-users text-slate-400 text-2xl"></i>
                            </div>
                            <h3 class="text-slate-900 font-bold">No users found</h3>
                            <p class="text-slate-500 text-sm mt-1">Try adjusting your search or add a new user.</p>
                        </div>
                    </td>
                </tr>
            @endforelse
        </x-ui.table>
    </x-ui.card>

    <div class="mt-4">
        {{ $users->links() }}
    </div>
</div>
