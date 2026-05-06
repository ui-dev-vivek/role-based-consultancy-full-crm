@props([
    'name', // Unique name for the modal
    'title' => null,
    'maxWidth' => '2xl', // sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl
])

@php
    $maxWidthClass = [
        'sm' => 'sm:max-w-sm',
        'md' => 'sm:max-w-md',
        'lg' => 'sm:max-w-lg',
        'xl' => 'sm:max-w-xl',
        '2xl' => 'sm:max-w-2xl',
        '3xl' => 'sm:max-w-3xl',
        '4xl' => 'sm:max-w-4xl',
        '5xl' => 'sm:max-w-5xl',
    ][$maxWidth];
@endphp

<div x-data="{ show: false }" x-show="show"
    x-on:open-modal.window="if ($event.detail === '{{ $name }}') show = true"
    x-on:close-modal.window="show = false" x-on:keydown.escape.window="show = false"
    class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
    <!-- Backdrop -->
    <div x-show="show" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 transition-all transform">
        <div class="absolute inset-0 bg-slate-900/50 backdrop-blur-sm"></div>
    </div>

    <!-- Modal Content -->
    <div x-show="show" x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        class="flex items-center justify-center min-h-screen p-4">
        <div @click.away="show = false"
            class="bg-white rounded-2xl shadow-2xl transform transition-all w-full {{ $maxWidthClass }} overflow-hidden flex flex-col max-h-[90vh]">
            <!-- Header -->
            <div class="px-6 py-4 border-b border-slate-100 flex items-center justify-between shrink-0">
                <h3 class="text-lg font-bold text-slate-900">{{ $title }}</h3>
                <button @click="show = false"
                    class="w-10 h-10 rounded-xl flex items-center justify-center text-slate-400 hover:text-slate-600 hover:bg-slate-100 transition-all">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- Body -->
            <div class="px-6 py-6 overflow-y-auto flex-1">
                {{ $slot }}
            </div>

            <!-- Footer -->
            @if (isset($footer))
                <div
                    class="px-6 py-4 bg-slate-50 border-t border-slate-100 flex items-center justify-end gap-3 shrink-0">
                    {{ $footer }}
                </div>
            @endif
        </div>
    </div>
</div>
