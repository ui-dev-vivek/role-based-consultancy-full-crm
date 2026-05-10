@props([
    'title' => 'Find Your Perfect',
    'highlightText' => 'College & Course',
    'description' => 'Expert guidance for BBA, BCA, B.Tech, MBA & more — with guaranteed placement support.',
    'badge' => 'Admissions Open 2024–25',
    'breadcrumbText' => 'Admissions',
    'primaryBtnText' => 'Apply Now',
    'primaryBtnUrl' => '#apply',
    'primaryBtnOnclick' => '',
    'secondaryBtnText' => 'Chat with Us',
    'secondaryBtnUrl' => 'https://wa.me/' . env('WA_NUMBER'),
    'height' => '350px',
    'stats' => [
        ['icon' => 'fas fa-university', 'color' => 'primary-400', 'text' => '100+ Partner Colleges'],
        ['icon' => 'fas fa-chart-line', 'color' => 'emerald-400', 'text' => '100% Placement Rate'],
        ['icon' => 'fas fa-compass', 'color' => 'cyan-400', 'text' => 'Free Counseling'],
        ['icon' => 'fas fa-users', 'color' => 'indigo-400', 'text' => '5,000+ Students Guided'],
    ],
])

{{-- Reusable Hero Component --}}
<div class="relative w-full overflow-hidden" style="height: {{ $height }};">
    <style>
        /* Overflow hidden */
        main>.overflow-hidden {
            padding-bottom: 0px;
            padding-top: 100px;
        }
    </style>
    {{-- Background gradient + orb layer --}}
    <div
        class="absolute inset-0 bg-gradient-to-br from-slate-900 via-primary-950 to-indigo-950 dark:from-slate-950 dark:via-primary-950 dark:to-indigo-950">
        {{-- Glowing orbs --}}
        <div class="absolute -top-16 -left-16 w-72 h-72 rounded-full bg-primary-500/30 blur-[90px] pointer-events-none">
        </div>
        <div
            class="absolute -bottom-20 right-10 w-80 h-80 rounded-full bg-indigo-500/25 blur-[100px] pointer-events-none">
        </div>
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-40 rounded-full bg-cyan-500/10 blur-[80px] pointer-events-none">
        </div>

        {{-- Subtle grid overlay --}}
        <div class="absolute inset-0 opacity-[0.04]"
            style="background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAwIDEwIEwgNDAgMTAgTSAxMCAwIEwgMTAgNDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==');">
        </div>

        {{-- Decorative dashed orbit ring --}}
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[200px] h-[200px] border border-white/[0.06] rounded-full border-dashed pointer-events-none"
            style="animation: spin 40s linear infinite;"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-center">

        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-1.5 text-sm font-semibold text-white/50 mb-4 tracking-wide uppercase">
            <a href="/" class="hover:text-white/80 transition-colors">Home</a>
            <i class="fas fa-chevron-right text-[9px]"></i>
            <span class="text-primary-400">{{ $breadcrumbText }}</span>
        </nav>

        {{-- Badge --}}
        <div class="inline-flex items-center gap-2 mb-3 w-max">
            <span
                class="flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary-500/20 border border-primary-400/30 text-primary-300 text-[14px] font-bold tracking-widest uppercase backdrop-blur-sm">
                <span class="w-1.5 h-1.5 rounded-full bg-primary-400 animate-pulse"></span>
                {{ $badge }}
            </span>
        </div>

        {{-- Headline + sub --}}
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6">
            <div>
                <h1 class="text-3xl sm:text-5xl font-black text-white leading-tight tracking-tight">
                    {{ $title }}
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-primary-400 via-cyan-400 to-indigo-400">
                        {{ $highlightText }}</span>
                </h1>
                <p class="mt-2 text-sm sm:text-base text-white/60 font-medium max-w-xl">
                    {{ $description }}
                </p>
            </div>

            {{-- CTAs --}}
            <div class="flex items-center gap-3 shrink-0">
                @if ($primaryBtnOnclick)
                    <button onclick="{{ $primaryBtnOnclick }}"
                        class="group inline-flex items-center gap-2 px-5 py-2.5 bg-white text-slate-900 font-extrabold text-sm rounded-xl shadow-lg hover:shadow-white/20 hover:scale-105 transition-all duration-300">
                        {{ $primaryBtnText }}
                        <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                    </button>
                @else
                    <a href="{{ $primaryBtnUrl }}"
                        class="group inline-flex items-center gap-2 px-5 py-2.5 bg-white text-slate-900 font-extrabold text-sm rounded-xl shadow-lg hover:shadow-white/20 hover:scale-105 transition-all duration-300">
                        {{ $primaryBtnText }}
                        <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                    </a>
                @endif
                <a href="{{ $secondaryBtnUrl }}" target="_blank"
                    class="group inline-flex items-center gap-2 px-5 py-2.5 bg-white/10 hover:bg-white/20 border border-white/20 text-white font-bold text-sm rounded-xl backdrop-blur-sm transition-all duration-300 hover:scale-105">
                    <i class="fab fa-whatsapp text-[#25D366] text-base"></i>
                    {{ $secondaryBtnText }}
                </a>
            </div>
        </div>

        {{-- Quick stats strip --}}
        <div class="mt-5 flex items-center gap-6 flex-wrap">
            @foreach ($stats as $index => $stat)
                @if ($index > 0)
                    <div class="h-3 w-px bg-white/20 hidden sm:block"></div>
                @endif
                <div class="flex items-center gap-2 text-white/60 text-xs font-semibold">
                    <i class="{{ $stat['icon'] }} text-{{ $stat['color'] }}"></i>
                    <span>{{ $stat['text'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    @keyframes spin {
        from {
            transform: translate(-50%, -50%) rotate(0deg);
        }

        to {
            transform: translate(-50%, -50%) rotate(360deg);
        }
    }
</style>
