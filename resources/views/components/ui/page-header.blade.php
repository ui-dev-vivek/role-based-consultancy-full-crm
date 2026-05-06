@props(['title', 'subtitle' => null])

<div {{ $attributes->merge(['class' => 'flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8']) }}>
    <div>
        <h1 class="text-2xl font-bold text-slate-900 tracking-tight">{{ $title }}</h1>
        @if ($subtitle)
            <p class="text-sm text-slate-500 mt-1">{{ $subtitle }}</p>
        @endif
    </div>

    @if (isset($actions))
        <div class="flex items-center gap-3">
            {{ $actions }}
        </div>
    @endif
</div>
