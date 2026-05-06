@props([
'variant' => 'info', // info, success, warning, error, secondary
'size' => 'md', // sm, md
])

@php
$baseStyles = 'inline-flex items-center font-medium rounded-full ring-1 ring-inset';

$variants = [
'info' => 'bg-blue-50 text-blue-700 ring-blue-600/20',
'success' => 'bg-emerald-50 text-emerald-700 ring-emerald-600/20',
'warning' => 'bg-amber-50 text-amber-700 ring-amber-600/20',
'error' => 'bg-red-50 text-red-700 ring-red-600/20',
'secondary' => 'bg-slate-50 text-slate-700 ring-slate-600/20',
];

$sizes = [
'sm' => 'px-2 py-0.5 text-[10px]',
'md' => 'px-2.5 py-0.5 text-xs',
];

$classes = "{$baseStyles} {$variants[$variant]} {$sizes[$size]}";
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>