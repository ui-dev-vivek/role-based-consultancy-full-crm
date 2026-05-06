@props([
'label',
'name',
'value' => '',
'required' => false,
'placeholder' => '',
'rows' => 3,
])

<div>
    @if($label)
    <label for="{{ $name }}" class="block text-sm font-semibold leading-6 text-slate-900 mb-2">
        {{ $label }}
        @if($required) <span class="text-red-500">*</span> @endif
    </label>
    @endif
    <div class="relative">
        <textarea id="{{ $name }}" name="{{ $name }}" rows="{{ $rows }}" required="{{ $required ? 'required' : '' }}"
            placeholder="{{ $placeholder }}" {{ $attributes->merge(['class' => 'p-2 block w-full rounded-md border-0 py-2.5 text-slate-900 shadow-sm ring-1 ring-inset ring-slate-300 placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6 transition-all' . ($errors->has($name) ? ' ring-red-500' : '')]) }}
        >{{ old($name, $value) }}</textarea>
    </div>
    @error($name)
    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>