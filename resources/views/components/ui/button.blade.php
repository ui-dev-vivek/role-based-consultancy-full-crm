@props([
    'variant' => 'primary', // primary, secondary, success, info, danger, ghost
    'size' => 'md', // sm, md, lg, xl
    'icon' => null,
    'href' => null,
    'type' => 'button',
    'outline' => false,
])

@php
    $baseStyles = 'inline-flex items-center justify-center font-bold transition-all duration-300 rounded-lg
focus:outline-none focus:ring-4 disabled:opacity-50 disabled:pointer-events-none active:scale-95 cursor-pointer';

    $variants = [
        'primary' => [
            'solid' =>
                'bg-primary-600 text-white hover:bg-primary-700 shadow-lg shadow-primary-200 focus:ring-primary-100',
            'outline' =>
                'bg-transparent text-primary-600 border-2 border-primary-600 hover:bg-primary-50 focus:ring-primary-100',
        ],
        'secondary' => [
            'solid' => 'bg-slate-100 text-slate-700 hover:bg-slate-200 shadow-sm focus:ring-slate-100',
            'outline' =>
                'bg-transparent text-slate-600 border-2 border-slate-200 hover:bg-slate-50 focus:ring-slate-100',
        ],
        'success' => [
            'solid' =>
                'bg-emerald-600 text-white hover:bg-emerald-700 shadow-lg shadow-emerald-100 focus:ring-emerald-100',
            'outline' =>
                'bg-transparent text-emerald-600 border-2 border-emerald-600 hover:bg-emerald-50 focus:ring-emerald-100',
        ],
        'info' => [
            'solid' => 'bg-sky-500 text-white hover:bg-sky-600 shadow-lg shadow-sky-100 focus:ring-sky-100',
            'outline' => 'bg-transparent text-sky-500 border-2 border-sky-500 hover:bg-sky-50 focus:ring-sky-100',
        ],
        'danger' => [
            'solid' => 'bg-rose-600 text-white hover:bg-rose-700 shadow-lg shadow-rose-100 focus:ring-rose-100',
            'outline' => 'bg-transparent text-rose-600 border-2 border-rose-600 hover:bg-rose-50 focus:ring-rose-100',
        ],

        'warning' => [
            'solid' => 'bg-amber-600 text-white hover:bg-amber-700 shadow-lg shadow-amber-100 focus:ring-amber-100',
            'outline' =>
                'bg-transparent text-amber-600 border-2 border-amber-600 hover:bg-amber-50 focus:ring-amber-100',
        ],

        'ghost' => [
            'solid' => 'bg-transparent text-slate-600 hover:bg-slate-100 focus:ring-slate-100',
            'outline' =>
                'bg-transparent text-slate-400 border-2 border-slate-100 hover:bg-slate-50 focus:ring-slate-100',
        ],
        'dark' => [
            'solid' => 'bg-slate-800 text-white hover:bg-slate-900 shadow-lg shadow-slate-200 focus:ring-slate-900',
            'outline' =>
                'bg-transparent text-slate-800 border-2 border-slate-800 hover:bg-slate-100 focus:ring-slate-900',
        ],
    ];

    $sizes = [
        'sm' => 'px-4 py-2 text-xs',
        'md' => 'px-6 py-3 text-sm',
        'lg' => 'px-8 py-4 text-base',
        'xl' => 'px-10 py-5 text-lg',
    ];

    $styleMode = $outline ? 'outline' : 'solid';
    $variantClass = $variants[$variant][$styleMode] ?? $variants['primary'][$styleMode];
    $sizeClass = $sizes[$size] ?? $sizes['md'];

    $classes = "{$baseStyles} {$variantClass} {$sizeClass}";
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if ($icon)
            <i class="{{ $icon }} {{ $slot->isEmpty() ? '' : 'mr-2' }}"></i>
        @endif
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if ($icon)
            <i class="{{ $icon }} {{ $slot->isEmpty() ? '' : 'mr-2' }}"></i>
        @endif
        {{ $slot }}
    </button>
@endif
