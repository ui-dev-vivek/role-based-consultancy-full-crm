<div class="flex min-h-full justify-center items-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="mx-auto w-full max-w-lg shadow-lg border border-slate-200 p-8 rounded-lg">
        <div>
            <div class="flex justify-center items-baseline gap-2 mb-4">
                <div class="flex items-center justify-center rounded-xl text-black">
                    <i class="fas fa-ad text-black text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900">{{ env('APP_NAME', 'Indoeuropeans') }}</h2>
            </div>
            <h2 class="text-xl font-bold tracking-tight text-slate-900 text-center">Sign in to your account</h2>
            <p class="mt-2 text-sm text-slate-500 text-center">
                Welcome back! Please enter your details.
            </p>
        </div>

        <div class="mt-5">
            <div>
                <form wire:submit="login" class="space-y-6">

                    <x-forms.ui.input label="Email address" wire:model.blur="email" name="email" type="email"
                        autocomplete="email" required />

                    <x-forms.ui.input label="Password" wire:model.blur="password" name="password" type="password"
                        autocomplete="current-password" required />

                    <div class="flex items-center justify-between">
                        <x-forms.ui.checkbox label="Remember me" wire:model="remember" id="remember" name="remember" />

                        <div class="text-sm leading-6">
                            <a href="{{ route('password.request') }}"
                                class="font-semibold text-primary-600 hover:text-primary-500 transition-colors">
                                Forgot password?
                            </a>
                        </div>
                    </div>

                    <button type="submit" wire:loading.attr="disabled" wire:target="login"
                        class="flex w-full justify-center rounded-xl bg-primary-600 px-3 py-3 text-sm font-bold leading-6 text-white shadow-md shadow-primary-100 hover:bg-primary-700 transition-all active:scale-[0.98] disabled:opacity-70 disabled:cursor-not-allowed">

                        <span wire:loading.remove wire:target="login">
                            Sign in
                        </span>

                        <span wire:loading wire:target="login">
                            <i class="fas fa-spinner fa-spin mr-2"></i> Signing in...
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
