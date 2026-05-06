<x-layouts.dashboard.base>
    <div class="max-w-3xl mx-auto">
        <div class="mb-8">
            <a href="{{ route('admin.roles.index') }}"
                class="inline-flex items-center text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">
                <i class="fas fa-chevron-left w-4 h-4 mr-2"></i>
                Back to Roles
            </a>
            <h1 class="text-2xl font-bold text-slate-900 tracking-tight mt-4">Create New Role</h1>
            <p class="text-sm text-slate-500 mt-1">Add a new role to the system</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
            <form action="{{ route('admin.roles.store') }}" method="POST" class="space-y-6">
                @csrf

                <x-forms.ui.input label="Role Name" name="role_name" required />

                <x-forms.ui.select label="Role Type" name="role_type" required>
                    <option value="">Select role type</option>
                    <option value="core" {{ old('role_type') === 'core' ? 'selected' : '' }}>Core</option>
                    <option value="sales" {{ old('role_type') === 'sales' ? 'selected' : '' }}>Sales</option>
                    <option value="partner" {{ old('role_type') === 'partner' ? 'selected' : '' }}>Partner</option>
                </x-forms.ui.select>

                <div>
                    <label class="block text-sm font-semibold text-slate-900 mb-3">Assign Permissions</label>
                    <div class="space-y-2">
                        @foreach ($permissions as $permission)
                            <div
                                class="flex p-3 rounded-lg border border-slate-200 hover:bg-slate-50 transition-colors cursor-pointer group">
                                <x-forms.ui.checkbox name="permissions[]" id="perm_{{ $permission->id }}"
                                    value="{{ $permission->id }}" :checked="in_array($permission->id, old('permissions', []))" />
                                <label for="perm_{{ $permission->id }}" class="ml-3 flex-1 cursor-pointer">
                                    <span
                                        class="text-sm font-medium text-slate-700 align-middle">{{ $permission->code }}</span>
                                    @if ($permission->description)
                                        <p class="text-xs text-slate-500 mt-0.5">{{ $permission->description }}</p>
                                    @endif
                                </label>
                            </div>
                        @endforeach
                    </div>
                    @error('permissions')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-end space-x-3 pt-6 border-t border-slate-100">
                    <a href="{{ route('admin.roles.index') }}"
                        class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition-all">
                        Cancel
                    </a>
                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium text-white bg-primary-600 rounded-xl hover:bg-primary-700 shadow-md shadow-primary-100 transition-all">
                        Create Role
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.dashboard.base>
