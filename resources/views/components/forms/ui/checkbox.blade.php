@props([
    'label' => null,
    'name' => null,
    'id' => null,
    'checked' => false,
    'value' => '1',
])

@php
    $id = $id ?? $name;
@endphp

<div class="flex items-center">
    <input id="{{ $id }}" name="{{ $name }}" type="checkbox" value="{{ $value }}"
        {{ old($name) || $checked ? 'checked' : '' }}
        {{ $attributes->merge([
            'class' => 'h-4 w-4 rounded border-slate-300 text-primary-600
            focus:ring-primary-600 transition-colors cursor-pointer',
        ]) }}>
    @if ($label)
        <label for="{{ $id }}" class="ml-3 block text-sm leading-6 text-slate-700 font-medium cursor-pointer">
            {{ $label }}
        </label>
    @endif
</div>
