<x-dashboards.layouts.base>

    <div class="max-w-7xl mx-auto">
        <x-ui.page-header title="Role Management" subtitle="Manage system roles and permissions">
            <x-slot name="actions">
                <x-ui.button href="{{ route('admin.roles.create') }}" icon="fas fa-plus">
                    Add Role
                </x-ui.button>
            </x-slot>
        </x-ui.page-header>

        @if (session('success'))
            <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-xl">
                {{ session('success') }}
            </div>
        @endif

        <x-ui.card padding="p-0">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50/50 border-b border-slate-100">
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Role Name
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Type</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Permissions
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Created</th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-right">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($roles as $role)
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="px-6 py-4">
                                    <p class="text-sm font-semibold text-slate-900">{{ $role->role_name }}</p>
                                </td>
                                <td class="px-6 py-4">
                                    <x-ui.badge variant="info">
                                        {{ ucfirst($role->role_type) }}
                                    </x-ui.badge>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex flex-wrap gap-1">
                                        @foreach ($role->permissions as $permission)
                                            <x-ui.badge variant="secondary" size="sm">
                                                {{ $permission->code }}
                                            </x-ui.badge>
                                        @endforeach
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-slate-500">{{ $role->created_at->diffForHumans() }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <x-ui.button variant="ghost" size="sm" icon="fas fa-edit" />
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-12 text-center text-slate-500">
                                    <i class="fas fa-shield-alt mx-auto text-4xl text-slate-300 mb-4 block"></i>
                                    <p class="mt-2">No roles found</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($roles->hasPages())
                <div class="px-6 py-4 border-t border-slate-100">
                    {{ $roles->links() }}
                </div>
            @endif
        </x-ui.card>
    </div>
</x-dashboards.layouts.base>
