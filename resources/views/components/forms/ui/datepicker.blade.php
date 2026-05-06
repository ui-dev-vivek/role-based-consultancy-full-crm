@props([
'label' => null,
'name',
'value' => '',
'type' => 'single', // single, range, multiple
'enableTime' => false,
'placeholder' => 'Select date...',
'format' => 'Y-m-d',
'required' => false,
])

@php
$timeFormat = $enableTime ? ' H:i' : '';
$finalFormat = $format . $timeFormat;
@endphp

<div x-data="{ 
        instance: null,
        selectedDates: [],
        init() {
            this.instance = flatpickr(this.$refs.input, {
                mode: '{{ $type }}',
                enableTime: {{ $enableTime ? 'true' : 'false' }},
                dateFormat: '{{ $finalFormat }}',
                onChange: (selectedDates, dateStr) => {
                    this.$refs.input.value = dateStr;
                    this.$refs.input.dispatchEvent(new Event('input', { bubbles: true }));
                    if ('{{ $type }}' === 'multiple') {
                        this.selectedDates = selectedDates.map(d => this.instance.formatDate(d, '{{ $finalFormat }}'));
                    }
                },
                onReady: (selectedDates, dateStr) => {
                    if ('{{ $type }}' === 'multiple' && dateStr) {
                         this.selectedDates = dateStr.split(', ');
                    }
                },
                appendTo: document.body,
                monthSelectorType: 'static',
                prevArrow: '<i class=\'fas fa-chevron-left\'></i>',
                nextArrow: '<i class=\'fas fa-chevron-right\'></i>',
            });
        },
        removeDate(dateToRemove) {
            const newDates = this.selectedDates.filter(d => d !== dateToRemove);
            this.instance.setDate(newDates);
            this.selectedDates = newDates;
            this.$refs.input.dispatchEvent(new Event('input', { bubbles: true }));
        }
    }" class="relative">
    @if($label)
    <label for="{{ $name }}" class="block text-sm font-semibold leading-6 text-slate-900 mb-2">
        {{ $label }}
        @if($required) <span class="text-red-500">*</span> @endif
    </label>
    @endif

    <div class="relative group">
        <div
            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400 group-focus-within:text-primary-600 transition-colors">
            <i class="fas {{ $enableTime ? 'fa-calendar-alt' : 'fa-calendar' }} w-4 h-4"></i>
        </div>

        <input x-ref="input" id="{{ $name }}" name="{{ $name }}" type="text" value="{{ old($name, $value) }}"
            placeholder="{{ $placeholder }}" required="{{ $required ? 'required' : '' }}" {{ $attributes->merge(['class'
        => 'pl-10 p-2 block w-full rounded-md border-0 py-2.5 text-slate-900 shadow-sm ring-1 ring-inset ring-slate-300
        placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6
        transition-all' . ($errors->has($name) ? ' ring-red-500' : '')]) }}
        >

        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
            <i class="fas fa-chevron-down text-slate-300 w-3 h-3"></i>
        </div>
    </div>

    <!-- Selected Dates Chips -->
    <template x-if="'{{ $type }}' === 'multiple' && selectedDates.length > 0">
        <div class="mt-3 flex flex-wrap gap-2 p-3 bg-slate-50 rounded-xl border border-slate-100">
            <template x-for="date in selectedDates" :key="date">
                <span
                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg text-xs font-bold bg-white text-primary-700 shadow-sm border border-primary-100 group transition-all hover:border-primary-200">
                    <span x-text="date"></span>
                    <button type="button" @click="removeDate(date)"
                        class="text-slate-400 hover:text-red-500 transition-colors">
                        <i class="fas fa-times text-[10px]"></i>
                    </button>
                </span>
            </template>
        </div>
    </template>

    @error($name)
    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror

    <style>
        .flatpickr-calendar {
            background-color: #ffffff !important;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
            border: 1px solid #e2e8f0 !important;
            border-radius: 1rem !important;
            font-family: inherit !important;
            margin-top: 8px !important;
            z-index: 9999 !important;
        }

        .flatpickr-day.selected {
            background: #2563eb !important;
            border-color: #2563eb !important;
            border-radius: 50% !important;
        }

        .flatpickr-day.inRange {
            background: #eff6ff !important;
            box-shadow: -5px 0 0 #eff6ff, 5px 0 0 #eff6ff !important;
        }

        .flatpickr-day:hover {
            background: #f1f5f9 !important;
        }

        .flatpickr-months .flatpickr-month {
            color: #0f172a !important;
            fill: #0f172a !important;
        }

        .flatpickr-current-month .flatpickr-monthDropdown-months {
            font-weight: 700 !important;
        }
    </style>
</div>