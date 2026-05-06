<div class="max-w-7xl mx-auto">
    <x-ui.page-header title="Partner Management" subtitle="Manage registered partners and their statuses">
        <x-slot name="actions">
            @if (auth()->user()->hasPermission('can_create_partner'))
                <x-ui.button href="{{ route('admin.partners.create') }}" icon="fas fa-plus">
                    Add Partner
                </x-ui.button>
            @endif
        </x-slot>
    </x-ui.page-header>

    @if (session('success'))
        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-xl">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-6">
        <x-forms.ui.input name="search" label="" placeholder="Search partners by name, org, or email..."
            wire:model.live="search" icon="fas fa-search" />
    </div>

    <x-ui.card padding="p-0">
        <x-ui.table :headers="['Partner', 'Contact', 'Created By', 'Status', 'Actions']">
            @forelse($partners as $partner)
                <x-ui.table.row wire:key="partner-{{ $partner->id }}">
                    <x-ui.table.cell>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center font-bold text-sm ring-1 ring-purple-100 shadow-sm">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-semibold text-slate-900">{{ $partner->partner_name }}</p>
                                <p class="text-xs text-slate-500">{{ $partner->organization_name }}</p>
                            </div>
                        </div>
                    </x-ui.table.cell>
                    <x-ui.table.cell>
                        <div class="text-sm text-slate-600">
                            <div><i class="fas fa-envelope text-xs w-4"></i> {{ $partner->partner_email }}</div>
                            <div class="mt-1"><i class="fas fa-phone text-xs w-4"></i>
                                {{ $partner->partner_phone ?? 'N/A' }}</div>
                        </div>
                    </x-ui.table.cell>
                    <x-ui.table.cell>
                        <div class="text-sm text-slate-600">
                            <span class="text-xs text-slate-400 block">{{ ucfirst($partner->created_by_role) }}</span>
                        </div>
                    </x-ui.table.cell>
                    <x-ui.table.cell>
                        <x-ui.badge :variant="$partner->status === 'active' ? 'success' : 'error'">
                            {{ ucfirst($partner->status) }}
                        </x-ui.badge>
                    </x-ui.table.cell>
                    <x-ui.table.cell class="text-right">
                        <div class="flex items-center justify-end space-x-2">
                            @if (auth()->user()->hasPermission('can_update_partner'))
                                <x-ui.button href="{{ route('admin.partners.edit', $partner->id) }}" variant="ghost"
                                    size="sm" icon="fas fa-edit" />
                            @endif

                            @if (auth()->user()->hasPermission('can_block_partner'))
                                <x-ui.button wire:click="delete({{ $partner->id }})"
                                    wire:confirm="Are you sure you want to block this partner?" variant="ghost"
                                    size="sm" icon="fas fa-ban"
                                    class="text-rose-600 hover:text-rose-700 hover:bg-rose-50" />
                            @else
                                <button type="button" class="p-1 px-2 text-slate-300 cursor-not-allowed"
                                    title="Unauthorized">
                                    <i class="fas fa-ban"></i>
                                </button>
                            @endif
                        </div>
                    </x-ui.table.cell>
                </x-ui.table.row>
            @empty
                <tr>
                    <td colspan="5" class="px-6 py-12 text-center">
                        <div class="flex flex-col items-center">
                            <div class="w-16 h-16 bg-slate-100 rounded-2xl flex items-center justify-center mb-4">
                                <i class="fas fa-handshake-slash text-slate-400 text-2xl"></i>
                            </div>
                            <h3 class="text-slate-900 font-bold">No partners found</h3>
                        </div>
                    </td>
                </tr>
            @endforelse
        </x-ui.table>
    </x-ui.card>

    <div class="mt-4">
        {{ $partners->links() }}
    </div>
</div>
