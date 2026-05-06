<div class="flex min-h-full justify-center items-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="mx-auto w-full max-w-lg shadow-lg border border-slate-200 p-8 rounded-lg">
        <div>
            <div class="flex justify-center items-baseline gap-2 mb-4">
                <div class="flex items-center justify-center rounded-xl text-black">
                    <i class="fas fa-ad text-black text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900">{{ env('APP_NAME', 'Indoeuropeans') }}</h2>
            </div>
            <h2 class="text-xl font-bold tracking-tight text-slate-900 text-center">Set new password</h2>
            <p class="mt-2 text-sm text-slate-500 text-center">
                Please enter your new password below.
            </p>
        </div>

        <div class="mt-5">
            <div>
                <form wire:submit="resetPassword" class="space-y-6">

                    <input type="hidden" wire:model="token">

                    <x-forms.ui.input label="Email address" wire:model.blur="email" name="email" type="email"
                        autocomplete="email" required />

                    <x-forms.ui.input label="Password" wire:model.blur="password" name="password" type="password"
                        required autocomplete="new-password" />

                    <x-forms.ui.input label="Confirm Password" wire:model.blur="password_confirmation"
                        name="password_confirmation" type="password" required autocomplete="new-password" />

                    <div>
                        <button type="submit" wire:loading.attr="disabled" wire:target="resetPassword"
                            class="flex w-full justify-center rounded-xl bg-primary-600 px-3 py-3 text-sm font-bold leading-6 text-white shadow-md shadow-primary-100 hover:bg-primary-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600 transition-all active:scale-[0.98] disabled:opacity-70 disabled:cursor-not-allowed">
                            <span wire:loading.remove wire:target="resetPassword">Reset Password</span>
                            <span wire:loading wire:target="resetPassword">
                                <i class="fas fa-spinner fa-spin mr-2"></i> Resetting...
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
