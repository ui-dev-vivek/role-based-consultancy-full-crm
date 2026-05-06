<x-layouts.dashboard.base>
    <div class="max-w-7xl mx-auto">
        <x-ui.page-header title="Permission Management" subtitle="Manage system permissions">
            <x-slot name="actions">
                <x-ui.button href="{{ route('admin.permissions.create') }}" icon="fas fa-plus">
                    Add Permission
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
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Permission
                                Code
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Description
                            </th>
                            <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-right">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($permissions as $permission)
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="px-6 py-4">
                                    <x-ui.badge variant="info">
                                        {{ $permission->code }}
                                    </x-ui.badge>
                                </td>
                                <td class="px-6 py-4">
                                    <p class="text-sm text-slate-600">{{ $permission->description ?: 'No description' }}
                                    </p>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <x-ui.button variant="ghost" size="sm" icon="fas fa-edit" />
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-6 py-12 text-center text-slate-500">
                                    <i class="fas fa-lock mx-auto text-4xl text-slate-300 mb-4 block"></i>
                                    <p class="mt-2">No permissions found</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($permissions->hasPages())
                <div class="px-6 py-4 border-t border-slate-100">
                    {{ $permissions->links() }}
                </div>
            @endif
        </x-ui.card>
    </div>
</x-layouts.dashboard.base>
