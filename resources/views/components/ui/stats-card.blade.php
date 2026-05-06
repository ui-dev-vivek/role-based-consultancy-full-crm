@props([
'label',
'value',
'icon',
'trend' => null, // 'up' or 'down'
'trendValue' => null,
'color' => 'primary', // primary, success, warning, error
])

@php
$colors = [
'primary' => 'bg-primary-50 text-primary-600',
'success' => 'bg-emerald-50 text-emerald-600',
'warning' => 'bg-amber-50 text-amber-600',
'error' => 'bg-red-50 text-red-600',
];
@endphp

<x-ui.card {{ $attributes }} padding="p-5">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-sm font-medium text-slate-500 mb-1">{{ $label }}</p>
            <h3 class="text-2xl font-bold text-slate-900 leading-tight">{{ $value }}</h3>

            @if($trend)
            <div class="flex items-center mt-2">
                <span class="text-xs font-bold {{ $trend === 'up' ? 'text-emerald-600' : 'text-red-600' }}">
                    <i class="fas fa-arrow-{{ $trend === 'up' ? 'up' : 'down' }} mr-1"></i>
                    {{ $trendValue }}
                </span>
                <span class="text-xs text-slate-400 ml-1.5 font-medium">vs last month</span>
            </div>
            @endif
        </div>

        <div class="w-12 h-12 rounded-2xl {{ $colors[$color] }} flex items-center justify-center text-xl shadow-sm">
            <i class="{{ $icon }}"></i>
        </div>
    </div>
</x-ui.card>