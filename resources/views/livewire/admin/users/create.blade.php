<div class="mx-auto">
    <x-ui.page-header title="Add New User" subtitle="Create a new user account with profile details">
        <x-slot name="actions">
            <x-ui.button href="{{ route('admin.users.index') }}" icon="fas fa-arrow-left">
                Back to Users
            </x-ui.button>
        </x-slot>
    </x-ui.page-header>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
        <form wire:submit="save" class="space-y-6">

            @if ($errors->has('general'))
                <div class="p-4 bg-red-50 text-red-700 rounded-lg">
                    {{ $errors->first('general') }}
                </div>
            @endif

            <x-ui.card header="User Details" class="font-bold">
                <div class="grid grid-cols-2 gap-3">
                    <div class="col-sm-6">
                        <x-forms.ui.input wire:model.blur="email" label="Email Address" type="email" required
                            placeholder="user@gmail.com" class="mb-2" />
                        <x-forms.ui.input wire:model.blur="password" label="Password" type="password" required />
                    </div>
                    <div class="col-sm-6">
                        <x-forms.ui.select wire:model.blur="user_type" label="User Type" required class="mb-2">
                            <option value="">Select user type</option>
                            <option value="core">Core</option>
                            <option value="sales">Sales</option>

                        </x-forms.ui.select>

                        <x-forms.ui.select wire:model.blur="status" label="Status" required class="mt-3">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </x-forms.ui.select>
                    </div>
                </div>
            </x-ui.card>
            <x-ui.card header="User Role (Core / Sales)">
                <div>
                    <label class="block text-sm font-semibold text-slate-900 mb-3">Assign Roles</label>
                    <div class="space-y-2">
                        @foreach ($allRoles as $role)
                            <div
                                class="flex items-center justify-between p-3 rounded-lg border border-slate-200 hover:bg-slate-50 transition-colors">
                                <x-forms.ui.checkbox wire:model.live="roles" value="{{ $role->id }}"
                                    id="role_{{ $role->id }}" name="roles[]" label="{{ $role->role_name }}" />
                                <span class="text-xs text-slate-500">{{ ucfirst($role->role_type) }}</span>
                            </div>
                        @endforeach
                    </div>
                    @error('roles')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </x-ui.card>
            <x-ui.card header="Personal Information">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <x-forms.ui.input wire:model.blur="first_name" label="First Name" required placeholder="John" />
                    <x-forms.ui.input wire:model.blur="last_name" label="Last Name" required placeholder="Doe" />
                    <x-forms.ui.input wire:model.blur="phone_no" label="Phone Number" required
                        placeholder="+91 9876543210" />
                </div>
            </x-ui.card>

            <x-ui.card header="Address Details">
                <div class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <x-forms.ui.input wire:model.blur="address_line_1" label="Address Line 1"
                            placeholder="Street Address" />
                        <x-forms.ui.input wire:model.blur="address_line_2" label="Address Line 2"
                            placeholder="Apartment, Suite, etc." />
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                        <x-forms.ui.input wire:model.blur="city" label="City" placeholder="City" />
                        <x-forms.ui.input wire:model.blur="state" label="State" placeholder="State" />
                        <x-forms.ui.input wire:model.blur="country" label="Country" placeholder="Country" />
                        <x-forms.ui.input wire:model.blur="pincode" label="Pincode" type="number"
                            placeholder="123456" />
                    </div>
                </div>
            </x-ui.card>



            <div class="flex items-center justify-end space-x-3 pt-6 border-t border-slate-100">
                <a href="{{ route('admin.users.index') }}"
                    class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition-all">
                    Cancel
                </a>

                {{-- Using a normal submit button, but let's make it show loading state --}}
                <div class="relative">
                    <button type="submit" wire:loading.attr="disabled"
                        class="px-4 py-2 text-sm font-medium text-white bg-primary-600 rounded-xl hover:bg-primary-700 shadow-md shadow-primary-100 transition-all disabled:opacity-50">
                        <span wire:loading.remove>Create User</span>
                        <span wire:loading>Creating...</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
