<div class="">
    <x-ui.page-header title="Edit Partner" subtitle="Update partner organization details">
        <x-slot name="actions">
            <x-ui.button href="{{ route('admin.partners.index') }}" variant="secondary" icon="fas fa-arrow-left">
                Back to List
            </x-ui.button>
        </x-slot>
    </x-ui.page-header>

    <div class="grid grid-cols-1 gap-6">
        <!-- Partner Details -->
        <x-ui.card title="Partner Organization" icon="fas fa-building">
            <form wire:submit="save" class="space-y-4">
                <x-forms.ui.input label="Partner Name" wire:model.blur="partner_name" name="partner_name" required />

                <x-forms.ui.input label="Organization Name" wire:model.blur="organization_name" name="organization_name"
                    required />

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <x-forms.ui.input label="Official Email" wire:model.blur="partner_email" name="partner_email"
                        type="email" required />

                    <x-forms.ui.input label="Phone Number" wire:model.blur="partner_phone" name="partner_phone" />
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

                <div class="flex justify-end pt-4">
                    <x-ui.button wire:click="save" loading="save" icon="fas fa-save">
                        Update Partner
                    </x-ui.button>
                </div>
            </form>
        </x-ui.card>
    </div>
</div>
