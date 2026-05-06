<div class=" mx-auto">
    <x-ui.page-header title="Create New Partner" subtitle="Register a new partner organization and owner account">
        <x-slot name="actions">
            <x-ui.button href="{{ route('admin.partners.index') }}" variant="secondary" icon="fas fa-arrow-left">
                Back to List
            </x-ui.button>
        </x-slot>
    </x-ui.page-header>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Partner Details -->
        <x-ui.card title="Partner Organization" icon="fas fa-building">
            <form wire:submit="save" class="space-y-4">
                <x-forms.ui.input label="Partner Name" wire:model.blur="partner_name" name="partner_name"
                    placeholder="e.g. Acme Corp" required />

                <x-forms.ui.input label="Organization Name" wire:model.blur="organization_name" name="organization_name"
                    placeholder="Full legal name" required />



                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <x-forms.ui.input label="Official Email" wire:model.blur="partner_email" name="partner_email"
                        type="email" placeholder="contact@acme.com" required />

                    <x-forms.ui.input label="Phone Number" wire:model.blur="partner_phone" name="partner_phone"
                        placeholder="+1234567890" />
                </div>

                <div class="border-t border-slate-100 my-4 pt-4">
                    <h4 class="text-sm font-semibold text-slate-700 mb-3">Partner Type (Select multiple)</h4>
                    <div class="flex flex-wrap gap-4">
                        @foreach ($available_types as $type)
                        <x-forms.ui.checkbox label="{{ ucfirst(str_replace('_', ' ', $type->type_name)) }}"
                            name="partner_types[]" value="{{ $type->id }}" wire:model="partner_types" />
                        @endforeach
                    </div>
                </div>

                <div class="border-t border-slate-100 my-4 pt-4">
                    <h4 class="text-sm font-semibold text-slate-700 mb-3">Address Details</h4>

                    <div class="space-y-4">
                        <x-forms.ui.input label="Address Line 1" wire:model.blur="address_line_1" name="address_line_1"
                            required />

                        <x-forms.ui.input label="Address Line 2" wire:model.blur="address_line_2"
                            name="address_line_2" />

                        <div class="grid grid-cols-2 gap-4">
                            <x-forms.ui.input label="City" wire:model.blur="city" name="city" required />
                            <x-forms.ui.input label="State" wire:model.blur="state" name="state" required />
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <x-forms.ui.input label="Country" wire:model.blur="country" name="country" required />
                            <x-forms.ui.input label="Pincode" wire:model.blur="pincode" name="pincode" required
                                maxlength="6" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 6)" />
                        </div>
                    </div>
                </div>
            </form>
        </x-ui.card>

        <!-- Account Details -->
        <div class="space-y-6">
            <x-ui.card title="Owner Account" icon="fas fa-user-shield">
                <div class="space-y-4">
                    <div class="bg-blue-50 border border-blue-100 rounded-lg p-3 text-sm text-blue-700">
                        <i class="fas fa-info-circle mr-1"></i> A user account will be created for the partner owner.
                        They will be assigned the <strong>Partner Owner</strong> role.
                    </div>

                    <x-forms.ui.input label="Owner Email (Login)" wire:model.blur="email" name="email" type="email"
                        required />

                    <x-forms.ui.input label="Password" wire:model.blur="password" name="password" type="password"
                        required />

                    <x-forms.ui.input label="Confirm Password" wire:model.blur="password_confirmation"
                        name="password_confirmation" type="password" required />
                </div>
            </x-ui.card>

            <div class="flex justify-end pt-4">
                <x-ui.button wire:click="save" loading="save" icon="fas fa-save">
                    Create Partner
                </x-ui.button>
            </div>
        </div>
    </div>
</div>