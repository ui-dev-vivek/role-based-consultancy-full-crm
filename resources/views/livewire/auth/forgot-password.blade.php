<div class="flex min-h-full justify-center items-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="mx-auto w-full max-w-lg shadow-lg border border-slate-200 p-8 rounded-lg">
        <div>
            <div class="flex justify-center items-baseline gap-2 mb-4">
                <div class="flex items-center justify-center rounded-xl text-black">
                    <i class="fas fa-ad text-black text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900">{{ env('APP_NAME', 'Indoeuropeans') }}</h2>
            </div>
            <h2 class="text-xl font-bold tracking-tight text-slate-900 text-center">Reset your password</h2>
            <p class="mt-2 text-sm text-slate-500 text-center">
                Enter your email address and we'll send you a link to reset your password.
            </p>
        </div>

        <div class="mt-5">
            <div>
                @if ($status)
                <div class="mb-4 rounded-md bg-green-50 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-check-circle text-green-400"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-green-800">{{ $status }}</p>
                        </div>
                    </div>
                </div>
                @endif

                <form wire:submit="sendLink" class="space-y-6">

                    <x-forms.ui.input label="Email address" wire:model.blur="email" name="email" type="email"
                        autocomplete="email" required />

                    <div>
                        <button type="submit" wire:loading.attr="disabled"
                            class="flex w-full justify-center rounded-xl bg-primary-600 px-3 py-3 text-sm font-bold leading-6 text-white shadow-md shadow-primary-100 hover:bg-primary-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600 transition-all active:scale-[0.98] disabled:opacity-70 disabled:cursor-not-allowed">
                            <span wire:loading.remove>Send Password Reset Link</span>
                            <span wire:loading>
                                <i class="fas fa-spinner fa-spin mr-2"></i> Sending...
                            </span>
                        </button>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('login') }}"
                            class="text-sm font-semibold text-primary-600 hover:text-primary-500">
                            Back to login
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>