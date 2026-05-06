@props([
'label',
'name',
'id',
'value',
'checked' => false,
])

<div class="flex items-center">
    <input id="{{ $id }}" name="{{ $name }}" type="radio" value="{{ $value }}" {{ (old($name)==$value || $checked)
        ? 'checked' : '' }} {{ $attributes->merge(['class' => 'h-4 w-4 border-slate-300 text-primary-600
    focus:ring-primary-600 transition-colors cursor-pointer']) }}
    >
    @if($label)
    <label for="{{ $id }}" class="ml-3 block text-sm leading-6 text-slate-700 font-medium cursor-pointer">
        {{ $label }}
    </label>
    @endif
</div>